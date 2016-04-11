<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Flyer;

class Photo extends Model
{
    //
    
    protected $fillable = [
    				'photo_path',
    				'thumbnail_path'
    			
    			];
				
				
				
	public function flyers(){
		
		return $this->belongsTo(Flyer::class);
	
	}			
}
