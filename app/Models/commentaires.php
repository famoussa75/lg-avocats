<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaires extends Model
{
    use HasFactory;
    protected $table = 'commentaires';
    protected $fillable = ['id_comnt', 'nom', 'email', 'commentaire', 'id_article'];
}
