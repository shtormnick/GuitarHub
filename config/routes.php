<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\Router;

Router::defaultRouteClass(DashedRoute::class);

// Новый маршрут добавляемый нами для нашего экшена для тегов.
// Символ `*` в конце говорит CakePHP что этот экшен
// принимает параметры.
Router::scope(
    '/bookmarks',
    ['controller' => 'Bookmarks'],
    function ($routes) {
        $routes->connect('/tagged/*', ['action' => 'tags']);
    }
);

Router::scope('/', function ($routes) {
    // Connect the default home and /pages/* routes.
    $routes->connect('/', [
        'controller' => 'Pages',
        'action' => 'display', 'home'
    ]);
    $routes->connect('/pages/*', [
        'controller' => 'Pages',
        'action' => 'display'
    ]);

    // Connect the conventions based default routes.
    $routes->fallbacks();
});