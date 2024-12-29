<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');

$routes->get('/todo', 'Todo::index');
$routes->post('/todo/add-task', 'Todo::addTask'); 

$routes->get('/signup', 'Signup::index'); 
$routes->post('/signup/process', 'SignUp::process'); 

$routes->get('/login', 'LoginController::index');
$routes->post('/login/process', 'LoginController::login_action');
$routes->get('/logout', 'LoginController::logout');




