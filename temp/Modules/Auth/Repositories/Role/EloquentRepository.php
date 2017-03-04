<?php

namespace Modules\Auth\Repositories\Role;

use Modules\Core\Repositories\BaseEloquentRepository;
use Modules\Auth\Repositories\Role\RepositoryInterface as UserRepository;

class EloquentRepository extends BaseEloquentRepository implements UserRepository
{
    public function getModel()
    {
        return 'Modules\Auth\Models\Role';
    }
}
