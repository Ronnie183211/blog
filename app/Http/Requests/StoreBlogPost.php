<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreBlogPost extends FormRequest
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
    public function rules(Request $request)
    {   
        
        switch($this->method())
        {
            case 'POST':
            
            {
                return [
                    'title' => 'required|unique:posts|max:255',
                    'active' => 'required',
                    'body' => 'required',
                    ];
            }

            case 'PUT':
            {
                return [
                    'title' => 'required|unique:posts|max:255,title,'.$request->title,
                    'active' => 'required,active,'.$request->active,
                    'body' => 'required,body,'.$request->body,
                ];
            }

            default:break;
        }
        
    }



}
