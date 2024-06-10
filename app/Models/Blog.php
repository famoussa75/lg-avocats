<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'meta_description',
        'meta_keywords',
        'category',
        'tags',
        'publish',
        'status',
        'user_id',
        'is_delete',
        'image',
        'slug'
    ];


    static public function getSingle($id)
    {
        return self::find($id);
    }


    static public function getRecordArticle()
    {
        $return = self::select('blogs.*', 'users.name as user_name')
        ->join('users', 'users.id', '=', 'blogs.user_id');

        if (!empty(Request::get('id'))) {
           
            $return = $return->where('blogs.id', '=', Request::get('id'));
        }

        if (!empty(Request::get('name'))) {
           
            $return = $return->where('users.name', 'like', '%'.Request::get('name').'%');
        }

        if (!empty(Request::get('title'))) {
           
            $return = $return->where('blogs.title', 'like', '%'.Request::get('title').'%');
        }

        if (!empty(Request::get('category'))) {
           
            $return = $return->where('blogs.category', 'like', '%'.Request::get('category').'%');
        }

        if (!empty(Request::get('is_publish'))) {

            $is_publish = Request::get('is_publish');

            if ($is_publish == 100) {

                $is_publish = 0;
            }

            $return = $return->where('blogs.is_publish', '=', $is_publish);
        }

        if (!empty(Request::get('status'))) {
            
            $status = Request::get('status');

            if ($status == 100) {

                $status = 0;
            }

            $return = $return->where('blogs.status', '=', $status);
        }

        if (!empty(Request::get('start_date'))) {
           
            $return = $return->whereDate('blogs.created_at', '>=', Request::get('start_date'));
        }

        if (!empty(Request::get('end_date'))) {
           
            $return = $return->whereDate('blogs.created_at', '<=', Request::get('end_date'));
        }

        $return = $return->where('blogs.is_delete', '=', 0)
        ->orderBy('blogs.id','desc')
        ->paginate(10);

        return $return;
    }

    static public function getRecordClient(){

        $return = self::select('blogs.*', 'users.name as user_name')
             ->join('users', 'users.id', '=', 'blogs.user_id');

             if (!empty(Request::get('q'))) {
              
                $return = $return->where('blogs.title', 'like', '%'.Request::get('q').'%');
             }

        $return = $return->where('blogs.status', '=', 1)
            ->where('blogs.is_publish', '=', 1)
            ->where('blogs.is_delete', '=', 0)
            ->orderBy('blogs.id', 'desc')
            ->paginate(3);

        return $return;
    }

    public function getImage(){
        if(!empty($this->image) && file_exists('upload/blog/'. $this->image)){

            return url('upload/blog/'.$this->image);
        }else {
            return "";
        }
    }

    public function getTag()
    {
        return $this->hasMany(BlogTags::class, 'blog_id');
    }

    static public function getRecordSingleClient($slug){

        return self::select('blogs.*', 'users.name as user_name')
            ->join('users', 'users.id', '=', 'blogs.user_id')
            ->where('blogs.status', '=', 1)
            ->where('blogs.is_publish', '=', 1)
            ->where('blogs.is_delete', '=', 0)
            ->where('blogs.slug', '=', $slug)
            ->first();
    }

    public static function totalBlogCateg1()
    {
        return self::where('status', 1)
            ->where('blogs.is_publish', '=', 1)
            ->where('blogs.is_delete', '=', 0)
            ->where('blogs.category', '=', 'Publication')
            ->count();
    }

    public static function totalBlogCateg2()
    {
        return self::where('status', 1)
            ->where('blogs.is_publish', '=', 1)
            ->where('blogs.is_delete', '=', 0)
            ->where('blogs.category', '=', 'Communiqué')
            ->count();
    }

    public static function totalBlogCateg3()
    {
        return self::where('status', 1)
            ->where('blogs.is_publish', '=', 1)
            ->where('blogs.is_delete', '=', 0)
            ->where('blogs.category', '=', 'Activité')
            ->count();
    }

    public function getComment()
    {
        return $this->hasMany(BlogComments::class, 'blog_id')->orderBy('created_at', 'desc');
    }

    public function scopeRecent($query, $limit = 3)
    {
        return $query->latest()->take($limit);
    }
}
