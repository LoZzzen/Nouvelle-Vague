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

    public function consultReserv(){

        $monmodel = new Modele();
        $session = session();

        $userId = $session->get('idUtilisateur');

        // Récupérer les événements depuis la base de données
        // $data['lesReserv'] = $monmodel->getReserv();
        $data['lesConsultations'] = $monmodel->getConsultResTF($userId);

        echo view('consultResTf',$data);
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
        public function formTF(){
            return view('ajoutTF');
        }
    
    public function ajouterTF() {   
        
        if ($this->request->is('post')) {
            //$validation = \Config\Services::validation();
    
            $rules = [
                'Nom' => 'required|max_length[60]',
                'Description' => 'required|max_length[755]',
                'Lieu' => 'required|max_length[255]',
                'date' => 'required|max_length[255]|min_length[5]',
                'NbPlace' => 'required|max_length[255]|min_length[1]'
            ];
    
            if ($this->request->is('post') && $this->validate($rules)) {
                $monmodel = new \App\Models\Modele();
                $nom = $this->request->getVar('Nom');
                $Description = $this->request->getVar('Description');
                $Lieu = $this->request->getVar('Lieu');
                $date = $this->request->getVar('date');
                $NbPlace = $this->request->getVar('NbPlace');
    
                $monmodel->insertTF($nom, $Description, $Lieu, $date, $NbPlace);
                $data['lesEvenements'] = $monmodel->getEvenements();
                return view('tempFort', $data);
            } 
        } 
        else {
            return view('ajoutTF');
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
             //contrainte de 10 caractère comprenant 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial
            'password' => 'required|min_length[10]|max_length[255]|regex_match[/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[\W_]).{10,}$/]',
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
    public function topTF(){
        $monmodel = new \App\Models\Modele();
        
        $data['lesTopEvenements'] = $monmodel->getTopTF();
        return view('topTF', $data);
    }

    public function profil() {
        $session = session(); // Récupération de la session
        $login = $session->get('login'); // Récupération du login stocké en session

        if (!$login) {
            return redirect()->to('/login'); // Redirection si non connecté
        }

        $monmodel = new \App\Models\Modele();
        $data['unUtilisateur'] = $monmodel->getUtilisateur($login);

        return view('profil', $data);
    }

    public function modifMdp(){
        $rules = [
            //contrainte de 10 caractère comprenant 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial
            'nMdp' => 'required|min_length[10]|max_length[255]|regex_match[/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[\W_]).{10,}$/]',
            ];
        if ($this->request->is('post') && $this->validate($rules)) {
            $monmodel = new \App\Models\Modele();
            $session = \Config\Services::session();
            $mdp = password_hash($this->request->getVar('nMdp'), PASSWORD_BCRYPT);
            $login = $session->get('login');
            $data['unUtilisateur'] = $monmodel->getUtilisateur($login);
                       
                if ($monmodel->getAncienMdp($mdp, $login)) {
                    echo "Mot de passe modifié";
                    return view('profil', $data);
                }

        }
        else {
            echo "Erreur lors de la mise à jour du mot de passe";
            return view('nvxMdp');
        }
            
    }

    public function nvMdp(){
        return view('nvxMdp');
    }
    
    
    
    public function accueilMaire(){
        return view('accueilMaire');
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
