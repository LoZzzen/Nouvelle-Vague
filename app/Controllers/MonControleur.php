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
        $session = session();

        $userId = $session->get('idUtilisateur');

        // Récupérer les événements depuis la base de données
        // $data['lesReserv'] = $monmodel->getReserv();
        $data['lesReserv'] = $monmodel->getReserv($userId);

        echo view('reservation',$data);
    }

   //Cnx Maire
    public function coMaire() {

        if($this->request->is('post')){

            $monmodel = new \App\Models\Modele();
            $login = $this->request->getVar('Login');
            $mdp = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);
            $user = $monmodel->connexionMaire($login, $mdp);

            if ($user) {
                
                $session = \Config\Services::session();
                $session->set('login', $login); 
    
                return view('accueilMaire'); 
            }
            else {

                return view('connexion'); 

            } 
        }
    }
    



    //STEPHEN :


    /**
     * Affiche la page de connexion
     */
    public function connexion()
    {
        // Charger plusieurs vues
        //echo view('index');
        return view('connexion');
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

        if ($this->request->is('post')) {
            $monmodel = new \App\Models\Modele();
            $login = $this->request->getVar('Login');
            $password = $this->request->getVar('password'); 
    
            $user = $monmodel->connexionArrivant($login);
            $user1 = $monmodel->connexionMaire($login);
    
            if ($user && password_verify($password, $user['mdp'])) {
                $session = \Config\Services::session();
                $session->set('login', $login); 
                return view('accueil'); 
            } 
            else if ($user1 && password_verify($password, $user1['mdp'])) {

                return view('accueilMaire');

            } else {
                return view('connexion'); 
            }
        }
    }
    
        
    
    

    public function validTF(){
            $monmodel = new \App\Models\Modele();
            
            $nom = $this->request->getVar('Nom');
            $prenom = $this->request->getVar('Prenom');    
            $nbPlace = $this->request->getVar('nbPlaceReserv');
            $unTF = $this->request->getVar('idEvenement');
            $monmodel->inscriTF($nom, $prenom, $nbPlace, $unTF);
            $date = date('Y-m-d');
            
                $user = $this->Modele->getIdUtili($nom, $prenom);
                if (!$user) {
                    echo "Utilisateur non trouvé";
                }
                $event = $this->Modele->getIdTF($nomEvenement);
                if (!$event) {
                    echo "Événement non trouvé";
                }

                $data = [
                    'dateDebut' => $date,
                    'dateFin' => $date,
                    'nbPlaceReserv' => $nbPlaces,
                    'idUtilisateur' => $user['idUtilisateur'],
                    'idEvenement' => $event['idEvenement']
                ];

                if ($this->Modele->insertReservation($data)) {
                    return view('resevation');
                } else {
                    return view('inscription');
                }
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
