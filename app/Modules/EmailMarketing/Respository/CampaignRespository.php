<?php

namespace App\Modules\EmailMarketing\Respository;

use App\Models\Campaign;
use App\Support\Traits\StorageableTrait;
use App\Support\Traits\UploadableTrait;

class CampaignRespository
{
    use StorageableTrait, UploadableTrait;

    private $model = null;

    public function __construct(Campaign $campaign)
    {
        $this->model = $campaign;
    }

    public function createOrUpdate($request, Campaign $campaign)
    {
        $campaign->name = $request->name;
        $campaign->save();

        return $campaign;
    }
}
