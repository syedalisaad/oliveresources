<?php

namespace App\Modules\EmailMarketing\Respository;

use App\Models\EmailTemplate;

use App\Support\Traits\{
    UploadableTrait,
    StorageableTrait
};

class EmailTemplateRespository
{
    use UploadableTrait, StorageableTrait;

    private $model = null;

    public function __construct(EmailTemplate $emailTemplate)
    {
        $this->model = $emailTemplate;
    }


    public function createOrUpdate($request, EmailTemplate $emailTemplate)
    {
        $emailTemplate->name         = $request->name;
        $emailTemplate->subject         = $request->subject;
        $emailTemplate->body   = $request->body;
        $emailTemplate->save();
        return $emailTemplate;
    }
}
