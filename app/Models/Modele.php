<?php
     namespace App\Models;
     use CodeIgniter\Model;
         

     //ROKHIYA :


         class Modele extends Model
         {
             //Méthode pour récupérer tous les événements
             public function getEvenements() {
                 $db = \Config\Database::connect();
                 $builder = $db->table('evenement');
                 $query = $builder->get();
                 $db->close();
                 return $query->getResultArray();
             }
         }




    //STEPHEN :



    
?>
