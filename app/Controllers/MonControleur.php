<?php
namespace App\Controllers;

use App\Models\Modele;

class MonControleur extends BaseController
{
    /**
     * Affiche la page d'accueil
     */
    public function index()
    {
        return view('accueil');
    }

    /**
     * Affiche les Temps Forts avec les données des événements
     */
    public function lesTF()
    {
        // Charger le modèle
        $monmodel = new Modele();

        // Récupérer les événements depuis la base de données
        $data['lesEvenements'] = $monmodel->getEvenements();

        // Charger la vue avec les données des événements
        return view('tempFort', $data);
    }

    /**
     * Affiche la page de connexion
     */
    public function connexion()
    {
        // Charger plusieurs vues
        echo view('index');
        echo view('connexion');
    }
}
