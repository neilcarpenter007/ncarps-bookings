<?php namespace Ncarps\Bookings\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Attendees Back-end Controller
 */
class Attendees extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ncarps.Bookings', 'bookings', 'attendees');
    }
}
