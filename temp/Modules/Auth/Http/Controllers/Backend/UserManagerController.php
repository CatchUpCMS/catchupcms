<?php

namespace Modules\Auth\Http\Controllers\Backend;

use Modules\Core\Http\Controllers\BaseBackendController;
use Modules\Auth\Datatables\UserManager;
use Modules\Admin\Traits\DataTableTrait;

class UserManagerController extends BaseBackendController
{
    use DataTableTrait;

    public function userManager()
    {
        return $this->renderDataTable(with(new UserManager())->boot());
    }
}
