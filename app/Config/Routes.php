<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

//page accueil

$routes->get('/', 'MonControleur::index');
$routes->get('/MonControleur/index', 'MonControleur::index');



//ROKHIYA : 

$routes->get('/MonControleur/lesTF', 'MonControleur::lesTF');
$routes->get('/MonControleur/inscriTF', 'MonControleur::inscriTF');
$routes->get('/MonControleur/reserv', 'MonControleur::reserv');

$routes->get('/MonControleur/coMaire', 'MonControleur::coMaire');
$routes->get('/MonControleur/connexion', 'MonControleur::connexion');

$routes->get('/MonControleur/consultReserv', 'MonControleur::consultReserv');

//STEPHEN : 
$routes->get('/MonControleur/inscription', 'MonControleur::inscription');

$routes->post('/MonControleur/valideFormulaire', 'MonControleur::valideFormulaire');
$routes->post('/MonControleur/validConnexion', 'MonControleur::validConnexion');

$routes->get('/MonControleur/deconnexion', 'MonControleur::deconnexion');

$routes->post('/MonControleur/validTF', 'MonControleur::validTF');
$routes->get('/MonControleur/topTF', 'MonControleur::topTF');
$routes->get('/MonControleur/accueilMaire', 'MonControleur::accueilMaire');
$routes->get('/MonControleur/profile', 'MonControleur::profile');
$routes->get('/MonControleur/modifMdp', 'MonControleur::modifMdp');