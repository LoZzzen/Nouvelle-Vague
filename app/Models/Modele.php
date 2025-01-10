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
    public function getDesContacts(){
        $db = \Config\Database::connect();
        $builder = $db->table('Igniter');
        $query = $builder->get();
        return $query->getResultArray();  
    }
    /*public function getNbContacts(){     
        $db = \Config\Database::connect();        
        $sql = "SELECT COUNT(*) as nb FROM Igniter";
        $query = $db->query($sql);
        $result = $query->getRowArray();
        $db->close();
        return $result['nb'];
    }*/
    public function getNbContacts(){
        $db = \Config\Database::connect();
        $builder = $db->table('Igniter');
        $builder->selectCount('id');
        $query = $builder->get();
        $result = $query->getResult();
        return $result[0]->id;
    }
    /*public function insertContact($log, $mdp, $mail){
        $db = \Config\Database::connect(); 
        $sql = "INSERT INTO Igniter (login,mdp, mail) VALUES('$log', '$mdp','$mail')";
        $result = $db->query($sql);
        $db->close();
        return $result; 
    }*/
    public function insertContact($log, $mdp, $mail){
        $db = \Config\Database::connect();
        $builder = $db->table('Igniter');
        $data = [
            'login'  => $log,
            'mdp'    => $mdp,
            'mail'   => $mail,
        ];
        $result = $builder->insert($data);
        return $result; 
    }
}