<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RolesRequest extends Request
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
            'role_title' => 'required',
            'role_slug' => 'required|min:3|unique:roles,role_slug,' . $this->segment(4)
        ];
    }
}
