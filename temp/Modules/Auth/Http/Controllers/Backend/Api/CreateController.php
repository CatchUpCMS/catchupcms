<?php

namespace Modules\Auth\Http\Controllers\Backend\Api;

use Modules\Auth as Auth;

class CreateController extends BaseApiController
{
    public function getForm(Auth\Models\ApiKey $key)
    {
        $data = $this->getApiKeyDetails($key);

        return $this->setView('admin.key.edit-basic', $data);
    }
}
