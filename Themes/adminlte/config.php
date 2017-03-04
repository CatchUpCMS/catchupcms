<?php

return [
    'name' => 'adminlte',
    'inherit' => 'default', //default

    'events' => [
        'before' => function ($theme) {
            $theme->setTitle(config('app.name').' Admin Panel');

            // Breadcrumb template.
            $theme->breadcrumb()->setTemplate(
                '<ol class="breadcrumb">
                @foreach ($crumbs as $i => $crumb)
                    @if ($i != (count($crumbs) - 1))
                    <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a></li>
                    @else
                    <li class="active">{{ $crumb["label"] }}</li>
                    @endif
                @endforeach
                </ol>'
            );
        },

        'asset' => function ($theme) {
            $themeName = config('cms.core.app.themes.backend');
            $theme->add('css', 'themes/'.$themeName.'/css/app.css');
            $theme->add('js', 'themes/'.$themeName.'/js/app.js');
        },

        // add dropdown-menu classes and such for the bootstrap toggle
        'beforeRenderTheme' => function ($theme) {
            $navService = (new \Modules\Core\Services\NavigationService());

            // grab the navigations
            $navService->boot();

            // theme specific nav stuff
            Menu::handler('backend_sidebar')->addClass('sidebar-menu');

            Menu::handler('backend_sidebar')
                ->getAllItemLists()
                ->map(function ($itemList) {
                    if ($itemList->getParent() !== null && $itemList->hasChildren()) {
                        $itemList->getParent()->addClass('treeview');
                        $itemList->addClass('treeview-menu');
                    }
                });

            // add dropdown class to the li if the set has children
            Menu::handler('backend_sidebar')
                ->getItemsByContentType('Menu\Items\Contents\Link')
                ->map(function ($item) {
                    $itemValue = $item->getValue()->getValue();
                    if ($item->hasChildren()) {
                        $value = sprintf('<span>%s</span> <i class="fa fa-angle-left pull-right"></i>', $itemValue);
                        $item->getValue()->setValue($value);
                    } elseif ($item->getValue()->getUrl() === '#') {
                        $item->addClass('header');
                        $item->getValue()->setElement('span');
                        $item->getParent()->setValue($itemValue);
                    }
                });

        },
    ],
];
