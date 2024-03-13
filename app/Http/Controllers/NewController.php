<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\articles;
use App\Models\commentaires;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = articles::orderBy('created_at', 'desc')->paginate(6);
        $recents = DB::select("select * from articles order by created_at desc limit 3");
        return view('pages/blog', compact('articles','recents'));
    }

    public function show($slug)
    {
       
        $article = DB::select("select * from articles where slug=?",[$slug]);
        $recents = DB::select("select * from articles order by created_at desc limit 3");

        return view('pages/article', compact('article','recents'));
    }


    public function editArticle($id_article)
    {
        $article = DB::select('select * from articles where id_article=?', [$id_article]);
        return view('pages/admin/update-article', compact('article'));
    }

    public function detailArticle($id_article)
    {
        $article = DB::select('select * from articles where id_article=?', [$id_article]);
        $commentaires = DB::select('select * from articles,commentaires where articles.id_article=commentaires.id_article and articles.id_article=?', [$id_article]);
        return view('pages/article', compact('article', 'commentaires'));
    }


    public function news()
    {
        $articles = articles::paginate(10); 
        return view('pages/admin/gestion-news', compact('articles'));
    }



    public function addCommentaire(Request $request)
    {
        commentaires::create([
            'commentaire' => $request->get('commentaire'),
            'nom' => $request->get('nom'),
            'email' => $request->get('email'),
            'id_article' => $request->get('id_article')

        ]);
        $id_article = $request->get('id_article');
        return redirect()->route('article', $id_article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeArticle(Request $request)
    {
       

            $titre_court = $request->get('titre');
            $max = 30;
            $max2 = 100;

            if (strlen($titre_court) >= $max) {
                // on prend la chaine de 0 à max
                $chaine = substr($titre_court, 0, $max);
            }elseif (strlen($titre_court) == 0) {
                $chaine = '';
            }else {
                $chaine = $titre_court;
            }

           
            if ($request->hasFile('image_article')) {
                $ImageSponsor = $request->file('image_article');
                $sponsorImageSaveAsName = time() . "as" . "-new." . $ImageSponsor->getClientOriginalExtension();

                $upload_path = 'uploads/articles/';
                $image = $upload_path . $sponsorImageSaveAsName;
                $ImageSponsor->move($upload_path, $sponsorImageSaveAsName);

            }else {
                $image = '';
            }

            if ($request->hasFile('contenu_pdf')) {
                $contenuPdf = $request->file('contenu_pdf');
                $pdf = time() . "as" . "-new." . $contenuPdf->getClientOriginalExtension();

                $upload_path = 'uploads/articles/';
                $file = $upload_path . $pdf;
                $contenuPdf->move($upload_path, $pdf);

            }else {
                $file = '';
            }


            
            $today = date("Y-m-d H:i:s");
            articles::create([
                'titre' => $request->get('titre'), 
                'titre_court' => $chaine,
                'contenu_court' => $request->get('contenu_court'),
                'contenu' => $request->get('contenu'),
                'contenu_externe' => $request->get('contenu_externe'),
                'contenu_pdf' => $file,
                'date_article' => strval($today),
                'image_article' => $image,
                'slug' => $request->_token . "" . rand(1234, 3458),
            ]);
        

        return redirect()->route('gestion-news')->with('success', 'Article publié avec succès ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateArticle(Request $request)
    {
        $id_article = $request->input('id_article');
        $article = DB::select("select * from articles where id_article=?", [$id_article]);

        if ($request->hasFile('image_article')) {


            $filePath = $article[0]->image_article;

            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $profileImage = $request->file('image_article');
            $profileImageSaveAsName = time() . "as" . "-new." . $profileImage->getClientOriginalExtension();


            $upload_path = 'uploads/articles/';
            $image_article = $upload_path . $profileImageSaveAsName;
            $profileImage->move($upload_path, $profileImageSaveAsName);
        } else {
            $image_article = $article[0]->image_article;
        }

        $titre_court = $request->get('titre');
        $contenu_court = $request->get('contenu');
        $max = 30;
        $max2 = 100;

        if (strlen($titre_court) >= $max) {
            // on prend la chaine de 0 à max
            $chaine = substr($titre_court, 0, $max);
        }

        if (strlen($contenu_court) >= $max2) {
            // on prend la chaine de 0 à max
            $chaine2 = substr($contenu_court, 0, $max2);
        }



        $titre = $request->input('titre');
        $contenu = $request->input('contenu');
        $today = date('Y-m-d');



        $article = DB::update(
            "update articles set titre=?,contenu=?,date_article=?,image_article=?,titre_court=?,contenu_court=? where id_article=?",
            [$titre, $contenu, $today, $image_article, $chaine, $chaine2, $id_article]
        );

        return redirect()->route('gestion-news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteArticle($id_article)
    {

        $article = DB::select("select * from articles where id_article=?", [$id_article]);

        $filePath1 = $article[0]->image_article;
        $contenuPDF = $article[0]->contenu_pdf;


        if (file_exists($filePath1)) {
            unlink($filePath1);
        }

        if (file_exists($contenuPDF)) {
            unlink($contenuPDF);
        }

        DB::delete('delete from articles where id_article=?', [$id_article]);

        return redirect()->route('gestion-news')->with('success', 'Article supprimé avec succès ! ');;
    }
}