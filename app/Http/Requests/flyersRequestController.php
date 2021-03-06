<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FlyersRequestController extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        
            //
			"name" => "required|min:3",
			"street" => "required",
			"city" => "required",
			"zip" => "required",
			"country" => "required",
			"state" => "required",
			"sale_price" => "required",
			"description" => "required"
		
        ];
    }
}
