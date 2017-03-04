<?php

namespace Modules\Admin\Models;

use Modules\Core\Models\BaseModel as CoreBaseModel;

class BaseModel extends CoreBaseModel
{
    public function __construct()
    {
        parent::__construct();

        $prefix = config('cms.admin.config.table-prefix', 'admin_');
        $this->table = $prefix.$this->table;
    }
}
