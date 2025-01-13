<?php
namespace App\Controllers;

class MonControleur extends BaseController{
    
    public function index() {
        return view('accueil');
    }

    public function lesTF(){     
       //$monmodel = new \App\Models\Modele();
        //$evenements['lesEvenement'] = $monmodel->getEvenements();
        return view('tempFort');
    }
  
    public function connexion() {
        return view('index') 
        .view('connexion');
    }
 
}
