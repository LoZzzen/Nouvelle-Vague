<?php
namespace App\Controllers;

class MonControleur extends BaseController{
    
    public function index() {
        return view('accueil');
    }

    public function lesTF()
    {     
        $monmodel = new \App\Models\Monmodele();
        $evenements = $monmodel->getEvenements();

        return view('tempFort', ['evenements' => $evenements]);
    }
  
    public function connexion() {
        return view('index') . view('connexion');
    }
    
 
}
