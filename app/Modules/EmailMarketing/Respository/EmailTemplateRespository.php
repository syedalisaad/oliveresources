<?php

namespace App\Modules\EmailMarketing\Respository;

use App\Models\EmailTemplate;
use App\Support\Traits\StorageableTrait;
use App\Support\Traits\UploadableTrait;

class EmailTemplateRespository
{
    use StorageableTrait, UploadableTrait;

    private $model = null;

    public function __construct(EmailTemplate $emailTemplate)
    {
        $this->model = $emailTemplate;
    }

    public function createOrUpdate($request, EmailTemplate $emailTemplate)
    {
        $emailTemplate->name = $request->name;
        $emailTemplate->subject = $request->subject;
        $emailTemplate->body = $request->body;
        $emailTemplate->save();

        return $emailTemplate;
    }
}
