<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Appelle la table visiteur dans le model
class Visiteur extends Model
{
  	protected $table = 'Visiteur';

  	public $timestamps = false; 
}
