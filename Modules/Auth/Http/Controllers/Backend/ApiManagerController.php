<?php

namespace Modules\Auth\Http\Controllers\Backend;

use Modules\Core\Http\Controllers\BaseBackendController;
use Modules\Auth\Datatables\ApiKeyManager;
use Modules\Admin\Traits\DataTableTrait;

class ApiManagerController extends BaseBackendController
{
    use DataTableTrait;

    public function manager()
    {
        return $this->renderDataTable(with(new ApiKeyManager())->boot());
    }
}
