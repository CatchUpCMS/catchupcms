<?php

namespace Modules\Admin\Providers;

use Modules\Admin\Models\Widget;
use Modules\Core\Models\Module;
use Modules\Core\Models\Navigation;
use Modules\Core\Models\NavigationLink;
use Modules\Core\Providers\CmsRoutingProvider;
use Illuminate\Support\Facades\Route;

class AdminRoutingProvider extends CmsRoutingProvider
{
    protected $namespace = 'Modules\Admin\Http\Controllers';

    /**
     * @return string
     */
    protected function getFrontendRoute()
    {
        return __DIR__.'/../Http/routes-frontend.php';
    }

    /**
     * @return string
     */
    protected function getBackendRoute()
    {
        return __DIR__.'/../Http/routes-backend.php';
    }

    /**
     * @return string
     */
    protected function getApiRoute()
    {
        return __DIR__.'/../Http/routes-api.php';
    }

    public function boot()
    {
        parent::boot();

        Route::bind('admin_module_name', function ($id) {
            return (new Module())->findOrFail($id);
        });

        Route::bind('admin_nav_name', function ($name) {
            return (new Navigation())
                ->with('links')
                ->where('name', $name)
                ->firstOrFail();
        });

        Route::bind('admin_link_id', function ($id) {
            return (new NavigationLink())->findOrFail($id);
        });

        Route::bind('admin_widget_id', function ($id) {
            return (new Widget())
                ->with('options')
                ->findOrFail($id);
        });
    }
}
