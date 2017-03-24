<?php namespace Urbn8\Wos\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Organisers extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'urbn8.wos.access_organisers' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Urbn8.Wos', 'wos-main', 'organisers');
    }
}