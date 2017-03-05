<?php

Route::group(['middleware' => 'web', 'prefix' => 'relations', 'namespace' => 'Modules\Relations\Http\Controllers'], function()
{
    Route::get('/', 'RelationsController@index');
});
