<?php namespace Ncarps\Bookings;

use Backend;
use System\Classes\PluginBase;

/**
 * Bookings Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Bookings',
            'description' => 'No description provided yet...',
            'author'      => 'Ncarps',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Ncarps\Bookings\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'ncarps.bookings.some_permission' => [
                'tab' => 'Bookings',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'bookings' => [
                'label'       => 'Bookings',
                'url'         => Backend::url('ncarps/bookings/bookings'),
                'icon'        => 'icon-book',
            ],
            'attendees' => [
                'label'       => 'Attendees',
                'url'         => Backend::url('ncarps/bookings/attendees'),
                'icon'        => 'icon-users',
            ],
        ];
    }
}
