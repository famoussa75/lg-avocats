<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visiteurs extends Model
{
    use HasFactory;
    protected $table = 'visiteurs';
    protected $fillable = ['id_visiteur', 'email_visiteur'];
}
