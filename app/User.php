<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Flyer;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function flyers(){
		return $this->hasMany(Flyer::class);
	}
	
	/**
	 * check if the use owns the flyer
	 *
	 * @return bool
	 * @author  
	 */
	
	public function owns($relation){
		
		return $relation->user_id == $this->id;
	}
	
}
