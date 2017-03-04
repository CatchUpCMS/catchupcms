<?php

namespace Modules\Auth\Http\Controllers\Backend\Role;

use Modules\Core\Http\Controllers\BaseBackendController;
use Modules\Auth as Auth;
use Former;

class BaseRoleController extends BaseBackendController
{
    public function boot()
    {
        parent::boot();

        $this->theme->setTitle('Role Manager');
        $this->theme->breadcrumb()->add('Role Manager', route('admin.role.manager'));
    }

    public function getRoleDetails(Auth\Models\Role $role)
    {
        Former::populate($role);
        $this->theme->setTitle('Role Manager <small>> '.$role->name.'</small>');

        return compact('role');
    }
}
