<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index');
$routes->get('/','Crud::index');
$routes->get('/insert','Crud::insert');
$routes->post('/insert','Crud::insert');
$routes->match(['get','post'],'insert','Crud::insert');
