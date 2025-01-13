<?php
namespace App\Controllers;

class MonControleur extends BaseController{
    
    public function index() {
        return view('accueil');
    }

    public function lesTF()
    {     
        $monmodel = new \app\Models\Monmodele();
        $evenements['lesEvenement'] = $monmodel->getEvenements();
      
        return view('tempFort', ['evenements' => $evenements]);
    }
  
    public function connexion() {
        return view('index') . view('connexion');
    }
 
}
