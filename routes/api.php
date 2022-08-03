<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$version = config('app.API_VERSION', 'v1');

Route::namespace('SaltEmployeeCalendar\Controllers')
    ->middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: CALENDARS
    Route::get("calendars", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("calendars", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("calendars/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("calendars/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("calendars/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("calendars/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("calendars/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendars/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendars/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("calendars/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("calendars/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("calendars/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendars/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

});
