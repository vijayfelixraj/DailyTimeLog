<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamTimeLogRequest extends FormRequest
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
            'user_id' => 'required',
            'project_name' => 'required|min:3|max:50',       
            'schedule_on' => 'required',
            'task' => 'required|min:3|max:1000',       
            'status' => 'required',
        ];
    }
}
