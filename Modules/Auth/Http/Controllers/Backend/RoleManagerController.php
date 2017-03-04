<?php

namespace Modules\Auth\Http\Controllers\Backend;

use Modules\Core\Http\Controllers\BaseBackendController;
use Modules\Auth\Datatables\RoleManager;
use Modules\Admin\Traits\DataTableTrait;

class RoleManagerController extends BaseBackendController
{
    use DataTableTrait;

    public function roleManager()
    {
        return $this->renderDataTable(with(new RoleManager())->boot());
    }
}
