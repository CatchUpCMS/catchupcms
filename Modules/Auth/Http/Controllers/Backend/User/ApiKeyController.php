<?php

namespace Modules\Auth\Http\Controllers\Backend\User;

use Modules\Admin\Traits\DataTableTrait;
use Modules\Auth\Datatables\ApiKeyManager;
use Modules\Auth\Models\User;

class ApiKeyController extends BaseUserController
{
    use DataTableTrait;

    public function manager(User $user)
    {
        $this->getUserDetails($user);
        $this->theme->breadcrumb()->add('Api Keys', route('admin.user.apikey', $user->id));

        return $this->renderDataTable(with(new ApiKeyManager())->boot());
    }

    private function getDataTableHtml($data)
    {
        return $this->setView('admin.user._datatable', $data);
    }
}
