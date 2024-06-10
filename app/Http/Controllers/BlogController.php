<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator; 
use App\Models\Blog;
use App\Models\BlogComments;
use App\Models\BlogTags;
use Auth;
use Hash;
use Str;


use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Interface client
    public function index(){

        $data = [
            'getRecord' => Blog::getRecordClient(),
            'totalCateg1' => Blog::totalBlogCateg1(),
            'totalCateg2' => Blog::totalBlogCateg2(),
            'totalCateg3' => Blog::totalBlogCateg3(),
        ];
        
        return view('client.pages.actualites.blog', $data);
        

    }

    public function show($slug){

        $data = [
            'getRecord' => Blog::getRecordSingleClient($slug),
            'getRecordRecent' => Blog::getRecordClient(),
            'totalCateg1' => Blog::totalBlogCateg1(),
            'totalCateg2' => Blog::totalBlogCateg2(),
            'totalCateg3' => Blog::totalBlogCateg3(),
        ];

        $getRecord = Blog::getRecordSingleClient($slug);
        if (!empty($getRecord)) {
           
            $data['getRecord'] = $getRecord;
            return view('client.pages.actualites.blog_detail', $data);

        } else {

            abort(404);
        }

        
        return view('client.pages.actualites.blog-single', $data);
    }




    // Interface admin
    public function list(){

        $data['getRecord'] = Blog::getRecordArticle();
        return view('backend.pages.blog.list', $data);
    }

    public function create()
    {
        return view('backend.pages.blog.add');
    }

    public function store(Request $request)
    {

        $save = new Blog;
        $save->user_id = Auth::user()->id;
        $save->title = trim($request->title);
        $save->category = trim($request->category);
        $save->description = trim($request->description);
        $save->meta_description = trim($request->meta_description);
        $save->meta_keywords = trim($request->meta_keywords);
        $save->is_publish = trim($request->is_publish);
        $save->is_delete = 0;
        $save->status = trim($request->status);
        $save->save();

        $slug = Str::slug($request->title);

        $checkSlug = Blog::where('slug', '=', $slug)->first();
        if (!empty($checkSlug)) {
           $dbslug = Str::$slug($request->title).'-'.$save->id;
        }else {
            $dbslug = $slug;
        }

        $save->slug = $dbslug;

        if (!empty($request->file('image'))) {
           $ext = $request->file('image')->getClientOriginalExtension();
           $file = $request->file('image');
           $filename = $dbslug.'.'.$ext;
           $file->move('upload/blog/', $filename);
           $save->image = $filename;
        }

        $save->save();

        BlogTags::InsertDeleteTag($save->id, $request->tags);

        return redirect()->route('backend.list_blog')->with('success', 'Article  enregistré avec succès !');
    }

    public function edit($id)
    {
        $data['getRecord'] = Blog::getSingle($id);
        return view('backend.pages.blog.edit', $data);
    }

    public function update($id, Request $request)
    {
        $save = Blog::getSingle($id);
        $save->title = trim($request->title);
        $save->category = trim($request->category);
        $save->tags = trim($request->tags);
        $save->description = trim($request->description);
        $save->meta_description = trim($request->meta_description);
        $save->meta_keywords = trim($request->meta_keywords);
        $save->is_publish = trim($request->is_publish);
        $save->status = trim($request->status);

        if (!empty($request->file('image'))) {
            if (!empty($save->getImage())) {

               unlink('upload/blog/'.$save->image);
            }
            
           $ext = $request->file('image')->getClientOriginalExtension();
           $file = $request->file('image');
           $filename = $save->slug.'.'.$ext;
           $file->move('upload/blog/', $filename);
           $save->image = $filename;
        }

        $save->save();

        BlogTags::InsertDeleteTag($save->id, $request->tags);


        return redirect()->route('backend.list_blog')->with('success', 'Article  modifié avec succès !');
    }

    public function delete($id)
    {
        $save = Blog::getSingle($id);
        $save->is_delete = 1;
        $save->save();
        return redirect()->back()->with('success', 'Article supprimé avec succès !');

    }

    public function addComment(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ]);

        try {
            if($validate->fails()){
                return redirect()->back()->withErrors($validate);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        $save = new BlogComments;
        $save->blog_id = $request->blog_id;
        $save->author = $request->author;
        $save->email = $request->email;
        $save->comment = $request->comment;
        $save->save();

        return redirect()->back()->with('success', 'Commentaire ajouté avec succès !');
    }
}
