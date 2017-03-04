<?php

namespace Modules\Admin\Http\Controllers\Backend\Config;

use Modules\Admin\Datatables\DashboardWidgetsManager;
use Modules\Admin\Services\DashboardService;
use Modules\Admin\Traits\DataTableTrait;
use Collective\Html\HtmlBuilder;

class DashboardController extends BaseConfigController
{
    use DataTableTrait;

    protected $dashboard;

    public function boot()
    {
        $this->dashboard = app(DashboardService::class);

        parent::boot();
    }

    public function manager()
    {
        return $this->renderDataTable(with(new DashboardWidgetsManager())->boot());
    }

    private function getDataTableHtml($data)
    {
        $this->dashboard->loadWidgetAssets();

        // replace all the widgets in the dashboard with admin-blank's for preview
        $data['gridLayout'] = collect($this->dashboard->getGridLayout())
            ->map(function ($widget) {
                array_set($widget, 'options.title', array_get($widget, 'id'));
                array_set($widget, 'component', 'admin-blank');

                return $widget;
            })
            ->toArray();

        $data['builder'] = app(HtmlBuilder::class);

        return $this->setView('admin.config.dashboard', $data, 'module:admin');
    }
}
