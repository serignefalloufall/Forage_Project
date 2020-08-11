<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
require_once 'ConsomationDB.php';
class CompteurDB extends Model{

    //La base de données samane_Compteur est dans view/Compteur
    //Pour Compteurer importer la
    public function __construct(){
        parent::__construct();
        $_conso = new ConsomationDB();
    }


    public function getCompteur($ID)
    {
        $sql = "SELECT *
                     FROM compteur
                     WHERE compteur.id = ".$ID;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getCompteurbynum($ID)
    {
        $sql = "SELECT *
                     FROM compteur
                     WHERE compteur.numero_compteur = '$ID' ";
        if($this->db != null)
            {
                return $this->db->query($sql)->fetch();
            }else{
                return null;
            }
    }


    public function addCompteur($numc,$date_consomation){
        $conso = new ConsomationDB();

        //$_conso = new ConsomationDB();
        $sql = "INSERT INTO compteur VALUES(null, '$numc',0)";
        if($this->db != null)
        {
            $this->db->exec($sql);
            $id_compteur=$this->db->lastInsertId();

            $conso->addConsomation(0, 'zero',
                50, $date_consomation, $id_compteur);

           return $id_compteur;//Si la clé primaire est auto_increment
            //sinon
           // return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteCompteur($id){
        $sql = "DELETE FROM compteur WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateCompteur($id, $valeur1, $valeur2){
        $sql = "UPDATE Compteur SET valeur1 = '$valeur1',
						valeur2 = '$valeur2'
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    public function Couper($id){
        $sql = "UPDATE Compteur SET etat = 1
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeCompteur(){
        $sql = "SELECT * FROM compteur WHERE etat = 0";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    public function listeCompteurCouper(){
        $sql = "SELECT * FROM compteur WHERE etat = 1";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    public function countCompteur(){
        $sql = "SELECT COUNT(id) FROM compteur";

        if($this->db != null)
            return $this->db->query($sql)->fetch();
        else
            return null;
    }
}