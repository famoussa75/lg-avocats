<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = ['id_article', 'titre', 'titre_court', 'contenu_pdf','contenu_court', 'contenu','contenu_externe', 'date_article', 'image_article','slug'];
}
