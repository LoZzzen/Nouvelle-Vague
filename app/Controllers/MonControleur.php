<?php
namespace App\Controllers;

use App\Models\Modele;

class MonControleur extends BaseController
{

    
    
     //ROKHIYA : 

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

    //Affiche le formulaire d'inscription aux TF
    public function inscriTF()
    {
        $monmodel = new Modele();

        // Récupérer les événements depuis la base de données
        $data['lesEvenements'] = $monmodel->getEvenements();
        
        return view('inscriTF', $data);
    }

    //Affiche la reservation des utilistaeurs des TF
    public function reserv(){
        $monmodel = new Modele();

        // Récupérer les événements depuis la base de données
        $data['lesReserv'] = $monmodel->getReserv();

        echo view('reservation',$data);
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
                $monmodel->insertArrivant($nom, $prenom, $log, $mdp);

                return view('connexion');         
            }
            else{
                return view('inscription');          
            }
    }
    
    public function validConnexion() {
        if($this->request->is('post')){
                $monmodel = new \App\Models\Modele();
                $login = $this->request->getVar('Login');
                $mdp = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
                $user = $monmodel->connexion($login, $mdp);

                if ($user) {
                    // Démarrer la session
                    $session = \Config\Services::session();
                    $session->set('login', $login); // Crée une variable de session avec le login
        
                    return view('accueil'); // Rediriger vers la page d'accueil
                }else {
                return view('connexion');          
                } 
        }
    }
    public function validTF(){
        
    }

    public function deconnexion() {
        // Charger le service de session
        $session = \Config\Services::session();
    
        // Détruire la session
        $session->destroy();
    
        // Rediriger vers la page de connexion ou une autre page
        return view('inscription');
    }
}  
