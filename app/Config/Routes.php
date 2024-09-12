<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
$routes->get('/profile', 'AuthController::profile');
$routes->get('/login', 'AuthController::index');
$routes->get('/register', 'AuthController::register');
$routes->get('/home', 'AuthController::home');
$routes->get('/dashboard', 'TaskController::dashboard');
$routes->get('/newtask', 'TaskController::newtask');


$routes->post('/register', 'AuthController::process_register');
$routes->post('/login', 'AuthController::process_login');
$routes->get('/logout', 'AuthController::logout');
$routes->post('/newtask', 'TaskController::process_newtask');
$routes->get('/update/(:num)', 'TaskController::update/$1');

$routes->post('/update/(:num)', 'TaskController::process_update/$1');
$routes->get('/delete/(:num)', 'TaskController::delete/$1');
