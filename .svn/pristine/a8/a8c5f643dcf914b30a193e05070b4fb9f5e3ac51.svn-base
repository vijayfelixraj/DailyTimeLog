<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
        $rules['name'] = 'required';
        $rules['user_role'] = 'required';

        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                {
                    return [];
                }
                break;
            case 'POST':
                {   
                    $rules['email'] = 'required|email|unique:users,email';
                    $rules['password'] = 'required';
                }
            case 'PUT':
            case 'PATCH':
                {
                    if (FormRequest::segment(2)) {
                       $rules['email'] = 'required|email|unique:users,email,' . FormRequest::segment(2) . ',id';  
                    }
                }
                break;
            default:break;
        }
        return $rules;
    }
}
