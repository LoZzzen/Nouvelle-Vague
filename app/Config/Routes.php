<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

//page accueil

$routes->get('/', 'MonControleur::index');
$routes->get('/MonControleur/index', 'MonControleur::index');



//ROKHIYA : 

$routes->get('/MonControleur/lesTF', 'MonControleur::lesTF');
$routes->get('/MonControleur/visiteVille', 'MonControleur::visiteVille');



//STEPHEN : 


$routes->get('/MonControleur/connexion', 'MonControleur::connexion');
