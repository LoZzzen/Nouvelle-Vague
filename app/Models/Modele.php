<?php
     namespace App\Models;
     use CodeIgniter\Model;
         class Modele extends Model
         {    
            //ROKHIYA :
            //Méthode pour récupérer tous les événements
             public function getEvenements() {
                 $db = \Config\Database::connect();
                 $builder = $db->table('evenement');
                 $query = $builder->get();
                 $db->close();
                 return $query->getResultArray();
             }
         
             public function getReserv(){
                $db = \Config\Database::connect();
                //$userId = session()->get('idUtilisateur');

                $sql = "SELECT nom, prenom, nomEvenement, dateEvenement, nbPlaceR 
                FROM utilisateur, evenement, reservation 
                WHERE utilisateur.idUtilisateur = reservation.idUtilisateur
                AND evenement.idEvenement = reservation.idEvenement
                AND reservation.idUtilisateur = 2";
                //$query = $db->query($sql,[$userId]);
                $query = $db->query($sql);
                $db->close();
                return $query->getResultArray();
             }
         
         
         
             //STEPHEN :

             //Méthode d'inscription
            public function insertArrivant($nom, $prenom, $log, $mdp) {
                $db = \Config\Database::connect(); // Connexion à la base de données
            
                // Requête préparée avec des placeholders
                $sql = "INSERT INTO utilisateur (nom, prenom, login, mdp, role) VALUES (?, ?, ?, ?, ?)";
            
                // Utilisation de la méthode "query" avec des données sécurisées
                $result = $db->query($sql, [$nom, $prenom, $log, $mdp, 'Arrivant']);
            
                $db->close(); // Fermeture de la connexion
                return $result;
            }

                //Méthode de connexion
            public function connexion($log, $mdp) {
                $db = \Config\Database::connect(); // Connexion à la base de données
            
                // Requête préparée avec des placeholders
                $sql = "SELECT * FROM utilisateur WHERE login = ? AND mdp = ?";
            
                // Utilisation de la méthode "query" avec des données sécurisées
                $result = $db->query($sql, [$log, $mdp]);
            
                $db->close(); // Fermeture de la connexion
                return $result;
            }

            public function inscriTF(){
                $db = \Config\Database::connect();
                $sql = "INSERT INTO reservation (dateDebut, dateFin, idUtilisateur, idEvenement) VALUES (?, ?, ?, ?, ?)";

            }
           
        }    
?>
