<?php

namespace Modules\Admin\Providers;

use Modules\Core\Providers\BaseEventsProvider;
use Modules\Core;
use Modules\Admin;
use Cache;

class AdminEventsProvider extends BaseEventsProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Modules\Admin\Events\ConfigWasSaved' => [
            'Modules\Admin\Events\Handlers\SetDebug',
        ],
    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [

    ];

    /**
     * Register any other events for your application.
     */
    public function boot()
    {
        parent::boot();

        Core\Models\DBConfig::saved(function ($model) {
            Cache::forget('core.config_table');
            event(new Admin\Events\ConfigWasSaved($model->key, $model->value));
        });
    }
}
