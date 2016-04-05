<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitsTable extends Migration {

	public function up()
	{
		Schema::create('Produits', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('Prix');
			$table->string('Titre');
			$table->string('Categorie');
			$table->string('Description');
			$table->text('Image');
			$table->string('Acteur');
			$table->text('Code_produit');
			$table->integer('Nombre_de_page');
		});
	}

	public function down()
	{
		Schema::drop('Produits');
	}
}