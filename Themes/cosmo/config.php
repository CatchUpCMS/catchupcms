<?php

return [
    'name' => 'cosmo',
    'inherit' => 'default', //default

    'events' => [

        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle(config('app.name'));

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
            $themeName = config('cms.core.app.themes.frontend');
            $theme->add('css', 'themes/'.$themeName.'/css/app.css');
            $theme->add('js', 'themes/'.$themeName.'/js/all.js');
        },

        'beforeRenderTheme' => function ($theme) {
            $navService = (new \Cms\Modules\Core\Services\NavigationService());


            // grab the navigations
            $navService->boot();

        },
    ],
];
