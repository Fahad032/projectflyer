<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Photo;
use App\User;

class Flyer extends Model
{
    //
    
    protected $fillable = [
    					'user_id',
    					'name',
    					'street',
    					'city',
    					'zip',
    					'country',
    					'state',
    					'sale_price',
    					'description'
    					];
						
	public function photos(){
		return $this->hasMany(Photo::class);
	}
	
	public function user(){
		return $this->belongsTo(User::class);
	}
						
}
