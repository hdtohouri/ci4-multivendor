<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match(['POST', 'GET'], '/', 'Auth::index', ['filter' => 'Auth_Filter']);
$routes->match(['POST', 'GET'], '/auth', 'Auth::index', ['filter' => 'Auth_Filter']);
$routes->match(['POST', 'GET'], '/auth/forgot_password', 'Auth::forgot_password');
$routes->match(['POST', 'GET'], '/auth/forgot_password', 'Auth::reset_password');

    // Route Erreur 404
$routes->set404Override(function() {
       return view('admin/auth_error404');
});


$routes->group('admin', static function ($routes) {
    $routes->match(['POST', 'GET'], 'home', 'Admin\Home::index', ['filter' => 'Auth_Filter']);
    //$routes->get('blog', 'Admin\Blog::index');
});