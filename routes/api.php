<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use SaltEmployeeCalendar\Controllers\ApiSaltResourcesController;
// use SaltEmployeeCalendar\Controllers\ApiNestedResourcesController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: CALENDARS
    Route::get("calendars", [ApiSaltResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendars", [ApiSaltResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendars/trash", [ApiSaltResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendars/import", [ApiSaltResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendars/export", [ApiSaltResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendars/report", [ApiSaltResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendars/{id}/trashed", [ApiSaltResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendars/{id}/restore", [ApiSaltResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendars/{id}/delete", [ApiSaltResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendars/{id}", [ApiSaltResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendars/{id}", [ApiSaltResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendars/{id}", [ApiSaltResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendars/{id}", [ApiSaltResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR BRANCHES
    Route::get("calendar_branches", [ApiSaltResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_branches", [ApiSaltResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_branches/trash", [ApiSaltResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_branches/import", [ApiSaltResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_branches/export", [ApiSaltResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_branches/report", [ApiSaltResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_branches/{id}/trashed", [ApiSaltResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_branches/{id}/restore", [ApiSaltResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_branches/{id}/delete", [ApiSaltResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_branches/{id}", [ApiSaltResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_branches/{id}", [ApiSaltResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_branches/{id}", [ApiSaltResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_branches/{id}", [ApiSaltResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR RELIGIONS
    Route::get("calendar_religions", [ApiSaltResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_religions", [ApiSaltResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_religions/trash", [ApiSaltResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_religions/import", [ApiSaltResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_religions/export", [ApiSaltResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_religions/report", [ApiSaltResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_religions/{id}/trashed", [ApiSaltResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_religions/{id}/restore", [ApiSaltResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_religions/{id}/delete", [ApiSaltResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_religions/{id}", [ApiSaltResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_religions/{id}", [ApiSaltResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_religions/{id}", [ApiSaltResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_religions/{id}", [ApiSaltResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR DEPARTMENTS
    Route::get("calendar_departments", [ApiSaltResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_departments", [ApiSaltResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_departments/trash", [ApiSaltResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_departments/import", [ApiSaltResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_departments/export", [ApiSaltResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_departments/report", [ApiSaltResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_departments/{id}/trashed", [ApiSaltResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_departments/{id}/restore", [ApiSaltResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_departments/{id}/delete", [ApiSaltResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_departments/{id}", [ApiSaltResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_departments/{id}", [ApiSaltResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_departments/{id}", [ApiSaltResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_departments/{id}", [ApiSaltResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR LEVELS
    Route::get("calendar_levels", [ApiSaltResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_levels", [ApiSaltResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_levels/trash", [ApiSaltResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_levels/import", [ApiSaltResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_levels/export", [ApiSaltResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_levels/report", [ApiSaltResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_levels/{id}/trashed", [ApiSaltResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_levels/{id}/restore", [ApiSaltResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_levels/{id}/delete", [ApiSaltResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_levels/{id}", [ApiSaltResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_levels/{id}", [ApiSaltResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_levels/{id}", [ApiSaltResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_levels/{id}", [ApiSaltResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR POSITIONS
    Route::get("calendar_positions", [ApiSaltResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_positions", [ApiSaltResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_positions/trash", [ApiSaltResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_positions/import", [ApiSaltResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_positions/export", [ApiSaltResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_positions/report", [ApiSaltResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_positions/{id}/trashed", [ApiSaltResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_positions/{id}/restore", [ApiSaltResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_positions/{id}/delete", [ApiSaltResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_positions/{id}", [ApiSaltResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_positions/{id}", [ApiSaltResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_positions/{id}", [ApiSaltResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_positions/{id}", [ApiSaltResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR EMPLOYEE STATUSES
    Route::get("calendar_employee_statuses", [ApiSaltResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_employee_statuses", [ApiSaltResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_employee_statuses/trash", [ApiSaltResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_employee_statuses/import", [ApiSaltResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_employee_statuses/export", [ApiSaltResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_employee_statuses/report", [ApiSaltResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_employee_statuses/{id}/trashed", [ApiSaltResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_employee_statuses/{id}/restore", [ApiSaltResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_employee_statuses/{id}/delete", [ApiSaltResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_employee_statuses/{id}", [ApiSaltResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_employee_statuses/{id}", [ApiSaltResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_employee_statuses/{id}", [ApiSaltResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_employee_statuses/{id}", [ApiSaltResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR EMPLOYEES
    Route::get("calendar_employees", [ApiSaltResourcesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_employees", [ApiSaltResourcesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_employees/trash", [ApiSaltResourcesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_employees/import", [ApiSaltResourcesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_employees/export", [ApiSaltResourcesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_employees/report", [ApiSaltResourcesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_employees/{id}/trashed", [ApiSaltResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_employees/{id}/restore", [ApiSaltResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_employees/{id}/delete", [ApiSaltResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_employees/{id}", [ApiSaltResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_employees/{id}", [ApiSaltResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_employees/{id}", [ApiSaltResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_employees/{id}", [ApiSaltResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

});
