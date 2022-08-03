<?php

namespace SaltEmployeeCalendar\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Schema;

use SaltLaravel\Models\Resources;
use SaltLaravel\Traits\ObservableModel;
use SaltLaravel\Traits\Uuids;

class CalendarEmployees extends Resources {

    use Uuids;
    use ObservableModel;

    protected $filters = [
        'default',
        'search',
        'fields',
        'relationship',
        'withtrashed',
        'orderby',

        // Fields table
        'id',
        'calendar_id',
        'employee_id'
    ];

    protected $rules = array(
        'calendar_id' => 'required|string',
        'employee_id' => 'required|string',
    );

    protected $auths = array (
        'index',
        'store',
        'show',
        'update',
        'patch',
        'destroy',
        'trash',
        'trashed',
        'restore',
        'delete',
        'import',
        'export',
        'report'
    );

    protected $structures = array();
    protected $forms = array();

    protected $searchable = array(
        'calendar_id',
        'employee_id'
    );

    protected $fillable = array(
        'calendar_id',
        'employee_id'
    );

}
