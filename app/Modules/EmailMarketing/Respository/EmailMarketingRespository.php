<?php

namespace App\Modules\EmailMarketing\Respository;

use App\Models\EmailMarketing;
use App\Support\Traits\StorageableTrait;
use App\Support\Traits\UploadableTrait;

class EmailMarketingRespository
{
    use StorageableTrait, UploadableTrait;

    private $model = null;

    public function __construct(EmailMarketing $emailMarketing)
    {
        $this->model = $emailMarketing;
    }

    public function createOrUpdate($request, EmailMarketing $emailMarketing)
    {
        $emailMarketing->email = $request->email;
        $emailMarketing->company = $request->company;
        $emailMarketing->phone = $request->phone;
        $emailMarketing->designation = $request->designation;
        $emailMarketing->in_verified = 1;
        $emailMarketing->save();

        return $emailMarketing;
    }
}
