<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


//$routes->get('/MonControleur/mafonction/(:any)', 'MonControleur::mafonction/$1');
//$route->get('/AutreControleur')
$routes->get('/', 'MonControleur::index');
$routes->get('/MonControleur/index', 'MonControleur::index');
$routes->get('/MonControleur/lesTF', 'MonControleur::lesTF');
$routes->get('/MonControleur/connexion', 'MonControleur::connexion');
//$routes->get('/AutreControleur','AutreControleur::index');
