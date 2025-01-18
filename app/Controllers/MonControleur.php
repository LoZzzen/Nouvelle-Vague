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

    
    
     //ROKHIYA : 


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

    public function inscriTF()
    {
        
        echo view('inscriTF');
    }
   





    //STEPHEN :


    /**
     * Affiche la page de connexion
     */
    public function connexion()
    {
        // Charger plusieurs vues
        //echo view('index');
        echo view('connexion');
    }

    public function inscription()
    {
        // Charger plusieurs vues
        //echo view('index');
        echo view('inscription');
    }
    

    public function valideFormulaire(){      
        $rules = [
            'Nom' => 'required|max_length[30]',
            'Prenom' => 'required|max_length[255]',
            'Login' => 'required|max_length[255]',
            'password' => 'required|max_length[255]|min_length[5]',
            ];
            if($this->request->is('post') && $this->validate($rules)){
                $monmodel = new \App\Models\Modele();
                $nom =  $this->request->getVar('Nom');   
                $prenom = $this->request->getVar('Prenom');           
                $log = $this->request->getVar('Login');
                $mdp = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
                //echo $user."    ".$mdp. "    ".$mail;
                $monmodel->insertArrivant($nom, $prenom, $log, $mdp);
                return view('accueil');         
            }
            else{
                return view('inscription');          
            }
    }
    
    public function validConnexion()
    {
    // Vérifie si le formulaire est soumis
    if ($this->request->is('post')) {
        $monmodel = new \App\Models\Modele();
        $login = $this->request->getVar('Login');
        $password = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
        
        $monmodel->connexionArrivant($login,$password);
            return view('accueil');
        }else {
            // Afficher une erreur si la connexion échoue
            return view('connexion');
        }
    }
}  
