<?php namespace Urbn8\Wos\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class BizCategories extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'biz.category.access' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Urbn8.Wos', 'wos-main', 'biz-categories');
    }
}