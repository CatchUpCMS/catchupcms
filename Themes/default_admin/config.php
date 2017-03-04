<?php

return [
    'name' => 'default_admin',
    'inherit' => 'default',

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
            $theme->add('js', 'themes/'.$themeName.'/js/all.js');
        },

        // add dropdown-menu classes and such for the bootstrap toggle
        'beforeRenderTheme' => function ($theme) {
            $navService = (new \Modules\Core\Services\NavigationService());

            // grab the navigations
            $navService->boot();

            // theme specific nav stuff
            Menu::handler('backend_sidebar')->addClass('nav')->id('side-menu');

            Menu::handler('backend_sidebar')
                ->getAllItemLists()
                ->map(function ($itemList) {
                    if ($itemList->getParent() !== null && $itemList->hasChildren()) {
                        $itemList->addClass('nav nav-second-level');
                    }
                });

            // add dropdown class to the li if the set has children
            Menu::handler('backend_sidebar')
                ->getItemsByContentType('Menu\Items\Contents\Link')
                ->map(function ($item) {
                    if ($item->hasChildren()) {
                        $item->getValue()->addClass('text-center title');
                    }
                });

        },
    ],
];
