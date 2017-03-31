<?php namespace Urbn8\Wos\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'urbn8_wos_events';

    public $belongsToMany = [
        'categories' => [
            'Urbn8\Wos\Models\EventCategory',
            'table' => 'urbn8_wos_business_events_categories',
            'key'      => 'event_id',
            'otherKey' => 'category_id',
        ],
    ];

    public $belongsToOne = [
        'organiser' => [
            'Urbn8\Wos\Models\Organiser',
        ],
    ];

    public $attachOne = [
        'thumbnail' => 'System\Models\File'
    ];

    /**
     * Sets the "url" attribute with a URL to this object
     * @param string $pageName
     * @param Cms\Classes\Controller $controller
     */
    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }
}