<?php

namespace App\Http;

/**
 * Flash class is responsibel to generate the flash message 
 * and to modify the real session()->flash() method
 */
 
class Flash{
	
	public function info($title, $message, $level){
			
		session()->flash('flash_message', [
											
											'title' => $title,
											'message' => $message,
											'level'	 => $level
												
												]);
	}
	
	
	public function success($title, $message){
		
			return $this->info($title, $message, 'success');
		
	}
	
	public function error($title, $message){
		
			return $this->info($title, $message, 'error');
		
	}
	
}
