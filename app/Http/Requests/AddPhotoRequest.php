<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Flyer;

class AddPhotoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
		
		
        return Flyer::where([
        				'zip' => $this->zip,
        				'street' => str_replace('-', ' ', $this->street),
        				'user_id' => \Auth::id()        
        			])->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            	
            	"file"=>'required|mimes:jpg,png,jpeg,bmp,gif'

            ];
    }
}
