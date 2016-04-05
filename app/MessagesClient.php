<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessagesClient extends Model {

	protected $table = 'MessagesClient';
	protected $fillable =  ['id', 'Client','Image','Email','Message'];
	public $timestamps = true;

}