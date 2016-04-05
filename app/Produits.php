<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model {

	protected $table = 'Produits';

	protected $fillable =  ['created_at', 'updated_at','Prix','Titre','Categorie','Description','Image','Acteur','Code_produit','Nombre_de_page'];

	public $timestamps = true;

}

 