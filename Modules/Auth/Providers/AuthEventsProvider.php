<?php

namespace Modules\Auth\Providers;

use Modules\Core\Providers\BaseEventsProvider;
use Modules\Auth;

class AuthEventsProvider extends BaseEventsProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        /*
         * AuthController@postLogin
         * AuthController@postRegister
         */
        'Modules\Auth\Events\UserHasLoggedIn' => [
            'Modules\Auth\Events\Handlers\CheckFor2Fa',
            'Modules\Auth\Events\Handlers\CheckForExpiredPassword',
            'Modules\Auth\Events\Handlers\CheckForEmptyEmail',
            'Modules\Auth\Events\Handlers\UpdateLastLogin',
        ],

        /*
         * AuthController@postRegister
         */
        'Modules\Auth\Events\UserIsRegistering' => [
        ],

        /*
         * AuthController@postRegister
         */
        'Modules\Auth\Events\UserHasRegistered' => [
        ],

        /*
         * SecurityController@postRegister
         */
        'Modules\Auth\Events\UserPasswordWasChanged' => [
            'Modules\Auth\Events\Handlers\RemovePasswordChangeLock',
        ],

        'Modules\Admin\Events\GotDatatableConfig' => [
            'Modules\Auth\Events\Handlers\ManipulateUserPermissionsDatatable',
            'Modules\Auth\Events\Handlers\ManipulateUserApiKeyDatatable',
            'Modules\Auth\Events\Handlers\ManipulateRoleUsersDatatable',
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

        // clear acp badge caches
        $models = [
            'User', 'Role', 'ApiKey',
        ];

        foreach ($models as $model) {
            $path = 'Modules\\Auth\\Models\\'.$model;
            $path::saved(function () use ($model) {
                \Cache::forget('sidebar.auth.'.strtolower($model).'.count');
            });
        }
    }
}
