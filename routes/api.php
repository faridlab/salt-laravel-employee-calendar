<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use SaltEmployeeCalendar\Controllers\ApiSaltResourcesController;
// use SaltEmployeeCalendar\Controllers\ApiNestedResourcesController;

use SaltEmployeeCalendar\Controllers\CalendarsController;
use SaltEmployeeCalendar\Controllers\CalendarBranchesController;
use SaltEmployeeCalendar\Controllers\CalendarDepartmentsController;
use SaltEmployeeCalendar\Controllers\CalendarEmployeesController;
use SaltEmployeeCalendar\Controllers\CalendarEmployeeStatusesController;
use SaltEmployeeCalendar\Controllers\CalendarLevelsController;
use SaltEmployeeCalendar\Controllers\CalendarPositionsController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: CALENDARS
    Route::get("calendars", [CalendarsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendars", [CalendarsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendars/trash", [CalendarsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendars/import", [CalendarsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendars/export", [CalendarsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendars/report", [CalendarsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendars/{id}/trashed", [CalendarsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendars/{id}/restore", [CalendarsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendars/{id}/delete", [CalendarsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendars/{id}", [CalendarsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendars/{id}", [CalendarsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendars/{id}", [CalendarsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendars/{id}", [CalendarsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR BRANCHES
    Route::get("calendar_branches", [CalendarBranchesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_branches", [CalendarBranchesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_branches/trash", [CalendarBranchesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_branches/import", [CalendarBranchesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_branches/export", [CalendarBranchesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_branches/report", [CalendarBranchesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_branches/{id}/trashed", [CalendarBranchesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_branches/{id}/restore", [CalendarBranchesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_branches/{id}/delete", [CalendarBranchesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_branches/{id}", [CalendarBranchesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_branches/{id}", [CalendarBranchesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_branches/{id}", [CalendarBranchesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_branches/{id}", [CalendarBranchesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


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
    Route::get("calendar_departments", [CalendarDepartmentsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_departments", [CalendarDepartmentsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_departments/trash", [CalendarDepartmentsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_departments/import", [CalendarDepartmentsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_departments/export", [CalendarDepartmentsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_departments/report", [CalendarDepartmentsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_departments/{id}/trashed", [CalendarDepartmentsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_departments/{id}/restore", [CalendarDepartmentsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_departments/{id}/delete", [CalendarDepartmentsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_departments/{id}", [CalendarDepartmentsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_departments/{id}", [CalendarDepartmentsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_departments/{id}", [CalendarDepartmentsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_departments/{id}", [CalendarDepartmentsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR LEVELS
    Route::get("calendar_levels", [CalendarLevelsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_levels", [CalendarLevelsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_levels/trash", [CalendarLevelsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_levels/import", [CalendarLevelsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_levels/export", [CalendarLevelsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_levels/report", [CalendarLevelsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_levels/{id}/trashed", [CalendarLevelsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_levels/{id}/restore", [CalendarLevelsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_levels/{id}/delete", [CalendarLevelsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_levels/{id}", [CalendarLevelsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_levels/{id}", [CalendarLevelsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_levels/{id}", [CalendarLevelsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_levels/{id}", [CalendarLevelsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR POSITIONS
    Route::get("calendar_positions", [CalendarPositionsController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_positions", [CalendarPositionsController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_positions/trash", [CalendarPositionsController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_positions/import", [CalendarPositionsController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_positions/export", [CalendarPositionsController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_positions/report", [CalendarPositionsController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_positions/{id}/trashed", [CalendarPositionsController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_positions/{id}/restore", [CalendarPositionsController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_positions/{id}/delete", [CalendarPositionsController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_positions/{id}", [CalendarPositionsController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_positions/{id}", [CalendarPositionsController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_positions/{id}", [CalendarPositionsController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_positions/{id}", [CalendarPositionsController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR EMPLOYEE STATUSES
    Route::get("calendar_employee_statuses", [CalendarEmployeeStatusesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_employee_statuses", [CalendarEmployeeStatusesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_employee_statuses/trash", [CalendarEmployeeStatusesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_employee_statuses/import", [CalendarEmployeeStatusesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_employee_statuses/export", [CalendarEmployeeStatusesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_employee_statuses/report", [CalendarEmployeeStatusesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_employee_statuses/{id}/trashed", [CalendarEmployeeStatusesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_employee_statuses/{id}/restore", [CalendarEmployeeStatusesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_employee_statuses/{id}/delete", [CalendarEmployeeStatusesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_employee_statuses/{id}", [CalendarEmployeeStatusesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_employee_statuses/{id}", [CalendarEmployeeStatusesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_employee_statuses/{id}", [CalendarEmployeeStatusesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_employee_statuses/{id}", [CalendarEmployeeStatusesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID


    // API: CALENDAR EMPLOYEES
    Route::get("calendar_employees", [CalendarEmployeesController::class, 'index'])->middleware(['auth:api']); // get entire collection
    Route::post("calendar_employees", [CalendarEmployeesController::class, 'store'])->middleware(['auth:api']); // create new collection

    Route::get("calendar_employees/trash", [CalendarEmployeesController::class, 'trash'])->middleware(['auth:api']); // trash of collection

    Route::post("calendar_employees/import", [CalendarEmployeesController::class, 'import'])->middleware(['auth:api']); // import collection from external
    Route::post("calendar_employees/export", [CalendarEmployeesController::class, 'export'])->middleware(['auth:api']); // export entire collection
    Route::get("calendar_employees/report", [CalendarEmployeesController::class, 'report'])->middleware(['auth:api']); // report collection

    Route::get("calendar_employees/{id}/trashed", [CalendarEmployeesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("calendar_employees/{id}/restore", [CalendarEmployeesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_employees/{id}/delete", [CalendarEmployeesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // hard delete collection by ID

    Route::get("calendar_employees/{id}", [CalendarEmployeesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // get collection by ID
    Route::put("calendar_employees/{id}", [CalendarEmployeesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // update collection by ID
    Route::patch("calendar_employees/{id}", [CalendarEmployeesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("calendar_employees/{id}", [CalendarEmployeesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+')->middleware(['auth:api']); // soft delete a collection by ID

});
