<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'email',
        'comment',
        'blog_id',
    ];
}
