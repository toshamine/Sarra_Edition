<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model {

	protected $table = 'Messages';
	protected $fillable =  ['id', 'Client','Image','Email','Message'];
	public $timestamps = true;

}