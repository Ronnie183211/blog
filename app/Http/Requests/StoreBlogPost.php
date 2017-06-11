<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Post;

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
    public function rules()
    {   
        $id = $this->post;
        
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
                    'title' => [
                        'required',
                        'max:255',
                        Rule::unique('posts')->ignore($id)
                    ],
                    'active' => 'required',
                    'body' => 'required',
                ];
            }

            default:break;
        }
        
    }



}
