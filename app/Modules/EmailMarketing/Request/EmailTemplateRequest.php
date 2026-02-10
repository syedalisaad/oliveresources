<?php

namespace App\Modules\EmailMarketing\Request;

use Illuminate\Foundation\Http\FormRequest;

class EmailTemplateRequest extends FormRequest
{
    public function rules()
    {

        $rules = [
            'name' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ];

        return $rules;
    }
}
