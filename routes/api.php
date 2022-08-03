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


    // API: CALENDAR BRANCHES
    Route::get("calendar_branches", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("calendar_branches", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("calendar_branches/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("calendar_branches/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("calendar_branches/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("calendar_branches/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("calendar_branches/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_branches/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_branches/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("calendar_branches/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("calendar_branches/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("calendar_branches/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_branches/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: CALENDAR RELIGIONS
    Route::get("calendar_religions", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("calendar_religions", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("calendar_religions/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("calendar_religions/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("calendar_religions/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("calendar_religions/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("calendar_religions/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_religions/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_religions/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("calendar_religions/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("calendar_religions/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("calendar_religions/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_religions/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: CALENDAR DEPARTMENTS
    Route::get("calendar_departments", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("calendar_departments", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("calendar_departments/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("calendar_departments/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("calendar_departments/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("calendar_departments/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("calendar_departments/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_departments/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_departments/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("calendar_departments/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("calendar_departments/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("calendar_departments/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_departments/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: CALENDAR LEVELS
    Route::get("calendar_levels", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("calendar_levels", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("calendar_levels/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("calendar_levels/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("calendar_levels/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("calendar_levels/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("calendar_levels/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_levels/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_levels/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("calendar_levels/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("calendar_levels/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("calendar_levels/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_levels/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: CALENDAR POSITIONS
    Route::get("calendar_positions", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("calendar_positions", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("calendar_positions/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("calendar_positions/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("calendar_positions/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("calendar_positions/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("calendar_positions/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_positions/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_positions/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("calendar_positions/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("calendar_positions/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("calendar_positions/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_positions/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: CALENDAR EMPLOYEE STATUSES
    Route::get("calendar_employee_statuses", 'ApiSaltResourcesController@index'); // get entire collection
    Route::post("calendar_employee_statuses", 'ApiSaltResourcesController@store'); // create new collection

    Route::get("calendar_employee_statuses/trash", 'ApiSaltResourcesController@trash'); // trash of collection

    Route::post("calendar_employee_statuses/import", 'ApiSaltResourcesController@import'); // import collection from external
    Route::post("calendar_employee_statuses/export", 'ApiSaltResourcesController@export'); // export entire collection
    Route::get("calendar_employee_statuses/report", 'ApiSaltResourcesController@report'); // report collection

    Route::get("calendar_employee_statuses/{id}/trashed", 'ApiSaltResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_employee_statuses/{id}/restore", 'ApiSaltResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_employee_statuses/{id}/delete", 'ApiSaltResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("calendar_employee_statuses/{id}", 'ApiSaltResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("calendar_employee_statuses/{id}", 'ApiSaltResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("calendar_employee_statuses/{id}", 'ApiSaltResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_employee_statuses/{id}", 'ApiSaltResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

});
