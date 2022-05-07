<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

//routing system;
$routes = new RouteCollection();

$routes->add('post',new Route(constant('URL_SUBFOLDER').'post/',array('controller'=>'PostController','methode'=>'index')));

