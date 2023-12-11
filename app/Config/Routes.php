<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controller');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::index');
//pangalan nung route-controller
$routes->resource('offices',['controller'=>'OfficeController','except'=>'new,edit']);
$routes->resource('tickets',['controller'=>'TicketController','except'=>'new,edit']);

service('auth')->routes($routes);
