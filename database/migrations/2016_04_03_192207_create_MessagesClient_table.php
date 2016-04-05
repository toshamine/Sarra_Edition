<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesClientTable extends Migration {

	public function up()
	{
		Schema::create('MessagesClient', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('Client');
			$table->text('Image');
			$table->text('Email');
			$table->text('Message');
		});
	}

	public function down()
	{
		Schema::drop('MessagesClient');
	}
}