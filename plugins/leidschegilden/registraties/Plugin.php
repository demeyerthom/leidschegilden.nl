<?php namespace Leidschegilden\Registraties;

use Backend;
use System\Classes\PluginBase;

/**
 * registraties Plugin Information File
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
            'name'        => 'Registraties',
            'description' => 'Verwerkt registraties',
            'author'      => 'leidschegilden',
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
            'Leidschegilden\Registraties\Components\MyComponent' => 'myComponent',
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
            'leidschegilden.registraties.some_permission' => [
                'tab' => 'registraties',
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
        return []; // Remove this line to activate

        return [
            'registraties' => [
                'label'       => 'registraties',
                'url'         => Backend::url('leidschegilden/registraties/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['leidschegilden.registraties.*'],
                'order'       => 500,
            ],
        ];
    }
}
