<?php

namespace App\Modules\EmailMarketing\Request;

use Illuminate\Foundation\Http\FormRequest;

class EmailMarketingRequest extends FormRequest
{
    public function rules()
    {
        $item_id = \Request::segment(3);

        $disposableDomains = [
            'mailinator.com',
            'guerrillamail.com',
            'example.com',
            'test.com',
        ];

        $rules = [
            'email' => [
                'required',
                'email:rfc,dns',
                function ($attribute, $value, $fail) use ($disposableDomains) {
                    $emailDomain = substr(strrchr($value, '@'), 1); // "example.com"

                    if (in_array($emailDomain, $disposableDomains)) {
                        $fail('Disposable or temporary email addresses are not allowed.');
                    }
                },
            ],
        ];

        if ($this->isMethod('PUT')) {
            $rules['email'][] = 'unique:email_marketings,email,'.$item_id;
        }

        return $rules;
    }
}
