<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapportVisite extends Model
{
   	use HasFactory;
   	//indique les données nécessaires de la table
    protected $fillable = ['VIS_MATRICULE','RAP_NUM', 'PRA_NUM', 'RAP_DATE', 'RAP_BILAN', 'RAP_MOTIF'];

    //retourne la jointure avec la table praticiens
     public function praticien() {
      return $this->belongsTo(Praticien::class, 'pra_num.rapport_visites', 'pra_num.praticiens');
   }

  	protected $table = 'rapport_visites';
}
