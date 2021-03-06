<?php

namespace Modules\Core\Http\Controllers;

class BaseFrontendController extends BaseController
{
    /**
     * Controls the layout for a controller.
     *
     * @var string
     */
    public $layout = '1-column';

    public $sidebar = null;

    public function boot()
    {

        // reset the themeName to whatever is in the config
        $this->setTheme(config('cms.core.app.themes.frontend', 'flatly'));


        // set the sidebar
        if ($this->sidebar === null) {
            $this->setSidebar('default');
        }

        parent::boot();
    }

    public function setSidebar($set = 'default')
    {
        $this->sidebar = $set;
        $this->theme->setSidebar($set);
    }
}
