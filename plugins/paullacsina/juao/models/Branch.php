<?php namespace PaulLacsina\Juao\Models;

use Model;

/**
 * Model
 */
class Branch extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'paullacsina_juao_branch';

    public $hasMany = [
        'work' => [
            'PaulLacsina\Juao\Models\Work',
            'table' => 'paullacsina_juao_works',
            'order' => 'title',
            'key' => 'branch_id'
        ],

        'contact' => [
            'PaulLacsina\Juao\Models\Contact',
            'table' => 'paullacsina_juao_contact',
            'order' => 'address',
            'key' => 'branch_id'
        ],

        'vacant' => [
            'PaulLacsina\Juao\Models\Vacant',
            'table' => 'paullacsina_juao_vacancies',
            'order' => 'title',
            'key' => 'branch_id'
        ],
    ];
}
