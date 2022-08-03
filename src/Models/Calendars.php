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

class Calendars extends Resources {

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
        'organization_id',
        'name',
        'date_start',
        'date_end',
        'is_holiday',
        'can_everyone_views',
        'note',
    ];

    protected $rules = array(
        'organization_id' => 'required|string',
        'name' => 'required|string',
        'date_start' => 'required|date',
        'date_end' => 'required|date',
        'is_holiday' => 'nullable|boolean',
        'can_everyone_views' => 'nullable|boolean',
        'note' => 'required|string',
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
        'organization_id',
        'name',
        'date_start',
        'date_end',
        'is_holiday',
        'can_everyone_views',
        'note',
    );

    protected $fillable = array(
        'organization_id',
        'name',
        'date_start',
        'date_end',
        'is_holiday',
        'can_everyone_views',
        'note',
    );

    public function organization() {
        return $this->belongsTo('SaltOrganization\Models\Organizations', 'organization_id', 'id');
    }
}
