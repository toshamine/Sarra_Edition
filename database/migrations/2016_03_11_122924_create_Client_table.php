<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientTable extends Migration {

	public function up()
	{
		Schema::create('Client', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('Nom', 25)->nullable();
			$table->string('Prenom', 25)->nullable();
			$table->text('email')->nullable();
			$table->string('Motdepasse', 20)->nullable();
			$table->text('Sexe')->nullable();
			$table->text('Image')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('Client');
	}
}