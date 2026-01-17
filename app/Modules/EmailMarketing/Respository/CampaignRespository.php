<?php

namespace App\Modules\EmailMarketing\Respository;

use App\Models\Campaign;

use App\Support\Traits\{
    UploadableTrait,
    StorageableTrait
};

class CampaignRespository
{
    use UploadableTrait, StorageableTrait;

    private $model = null;

    public function __construct(Campaign $campaign)
    {
        $this->model = $campaign;
    }


    public function createOrUpdate($request, Campaign $campaign)
    {
        $campaign->name         = $request->name;
        $campaign->save();
        return $campaign;
    }
}
