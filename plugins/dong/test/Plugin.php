<?php namespace Dong\Test;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'test',
            'description' => 'No description provided yet...',
            'author' => 'dong',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            \Dong\Test\Components\BlogPosts::class => 'dongBlogPosts',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return [
            'dong.test.some_permission' => [
                'tab' => 'test',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'test' => [
                'label' => 'test',
                'url' => Backend::url('dong/test/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['dong.test.*'],
                'order' => 500,
                'sideMenu' => [
                        'posts' => [
                            'label'       => 'Posts',
                            'url'         => Backend::url('dong/test/posts'),
                            'icon'        => 'icon-copy',
                            'permissions' => ['acme.blog.manage_posts'],
                            'order'       => 100,
                        ],
                        'authors' => [
                            'label'       => 'Authors',
                            'url'         => Backend::url('dong/test/authors'),
                            'icon'        => 'icon-user',
                            'permissions' => ['acme.blog.manage_authors'],
                            'order'       => 200,
                        ],
                        'book' => [
                            'label'       => 'Books',
                            'url'         => Backend::url('dong/test/book'),
                            'icon'        => 'icon-book',
                            'permissions' => ['acme.blog.manage_books'],
                            'order'       => 200,
                        ],
                        'bills' => [
                            'label'       => 'Bills',
                            'url'         => Backend::url('dong/test/bill'),
                            'icon'        => 'icon-pencil',
                            'permissions' => ['acme.blog.manage_bills'],
                            'order'       => 200,
                        ],
                    ],
            ],
        ];
    }
}
