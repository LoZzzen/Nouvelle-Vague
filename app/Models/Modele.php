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

             //Méthode de connexion
             public function connexionMaire($log, $mdp) {
                $db = \Config\Database::connect(); // Connexion à la base de données
            
                // Requête préparée avec des placeholders
                $sql = "SELECT * FROM utilisateur WHERE login = ? AND mdp = ? AND role = 'Maire'";
            
                // Utilisation de la méthode "query" avec des données sécurisées
                $result = $db->query($sql, [$log, $mdp]);
            
                $db->close(); // Fermeture de la connexion
                return $result;
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

             /*public function getReserv($userId) {
                $db = \Config\Database::connect();
                
                $sql = "SELECT utilisateur.nom, utilisateur.prenom, evenement.nomEvenement, evenement.dateEvenement, reservation.nbPlaceR 
                        FROM utilisateur
                        INNER JOIN reservation ON utilisateur.idUtilisateur = reservation.idUtilisateur
                        INNER JOIN evenement ON evenement.idEvenement = reservation.idEvenement
                        WHERE reservation.idUtilisateur = ?";
                
                $query = $db->query($sql, [$userId]);
                
                $db->close();
                
                return $query->getResultArray();
            }*/
            
            
         
         
         
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
           
            public function getIdUtili($nom, $prenom){
                $db = \Config\Database::connect();
                //requete pour prendre l'idUtilisateur
                $sql = "SELECT idUtilisateur FROM utilisateur WHERE nom = ? AND prenom = ?";

                $result = $db->query($sql, [$nom, $prenom]);
                
                $db->close(); // Fermeture de la connexion
                return $result;
            }
            
            
            public function getIdTF($unTF){
                $db = \Config\Database::connect();

                 //requete pour prendre l'idEvenement
                $sql = "SELECT idEvenement FROM evenement WHERE nomEvenement = ?";

                $result = $db->query($sql, [$unTF]);

                $db->close(); // Fermeture de la connexion
                return $result;
            }

            public function insertReservation($data) {
                $db = \Config\Database::connect();
                
                $this->db->insert('reservation', $data);
                return $this->db->insert();
            }
                     
            /*public function inscriTF($unId, $nbPlace, $unTF){
                $unId->getIdUtili();
                $unIdTf->getIdTF();

                $sql = "INSERT INTO reservation (dateDebut, dateFin, nbPlaceReserv, idUtilisateur, idEvenement) VALUES ('2025-01-02', '2026-05-20', ?, ?, ?)";

                $result = $db->query($sql, [$nbPlace, $unId, $unIdTf]);
                
                $db->close(); // Fermeture de la connexion
                return $result;
            }*/
           
        }    
?>
