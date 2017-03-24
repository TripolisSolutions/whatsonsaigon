<?php namespace Urbn8\Wos\Models;

use Model;

/**
 * Model
 */
class Organiser extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * Hard implement the TranslatableModel behavior.
     */
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    
    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = ['name', 'desc'];

    /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = ['slug' => 'name'];

    protected $fillable = ['name', 'desc', 'status'];

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required|between:2,16',
        'slug' => 'required|unique:urbn8_wos_businesses',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'urbn8_wos_organisers';

    public $belongsToMany = [
        'users' => [
            'RainLab\User\Models\User',
            'table' => 'urbn8_wos_organiser_user',
        ],
    ];
}
