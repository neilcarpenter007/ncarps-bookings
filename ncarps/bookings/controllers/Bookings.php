<?php namespace Ncarps\Bookings\Controllers;

use Event;
use BackendMenu;
use Backend\Classes\Controller;

/**
 * Bookings Back-end Controller
 */
class Bookings extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ncarps.Bookings', 'bookings', 'bookings');

        Event::listen('backend.form.beforeRefresh', function ($widget, $form) {
           $form->data['total'] = $this->vars['formModel']->fresh()->total;
        });
    }
}
