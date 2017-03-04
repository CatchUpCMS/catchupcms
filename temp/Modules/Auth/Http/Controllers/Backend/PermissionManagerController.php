<?php

namespace Modules\Auth\Http\Controllers\Backend;

use Modules\Core\Http\Controllers\BaseBackendController;
use Modules\Auth\Datatables\PermissionManager;
use Modules\Admin\Traits\DataTableTrait;

class PermissionManagerController extends BaseBackendController
{
    use DataTableTrait;

    public function permissionManager()
    {
        return $this->renderDataTable(with(new PermissionManager())->boot());
    }
}
