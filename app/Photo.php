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
	
	
	public function delete(){
		
		\File::delete([
						$this->thumbnail_path,
						$this->photo_path
					]);
		
		return parent::delete();
		
		
	}		
}
