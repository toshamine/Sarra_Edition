<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable {

	protected $table = 'Client';
    
	
	protected $fillable = [
        'Nom', 'Prenom', 'email', 'Motdepasse' , 'Sexe' , 'Image',
    ];
	protected $hidden = [
        'Motdepasse', 'remember_token',
    ];
	public $timestamps = true;

}