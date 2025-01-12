<?php
namespace App\Models;
use CodeIgniter\Model;
class Modele extends Model{

    /*public function getLesContacts(){  
        $db = \Config\Database::connect();        
        $sql = "SELECT * FROM Igniter";
        $result = $db->query($sql);
        $db->close();
        return $result->getResultArray();
    }*/
    
    class Monmodele extends Model
    {
        protected $table = 'evenement'; // Le nom de la table
        protected $primaryKey = 'id'; // La clé primaire
        protected $allowedFields = ['nom', 'date', 'description', 'lieu']; // Champs autorisés

        // Méthode pour récupérer tous les événements
        public function getEvenements()
        
        {
            return $this->findAll(); 
        }

    }
}