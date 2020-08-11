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
class ConsomationDB extends Model{

    //La base de données samane_Consomation est dans view/Consomation
    //Pour Consomationer importer la
    public function __construct(){
        parent::__construct();
    }

    public function getConsomation($ID)
    {
        $sql = "SELECT *
                     FROM consomation
                     WHERE consomation.id = ".$ID;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getDernierConsomation($ID)
    {
        $sql = "SELECT * FROM `consomation`
              WHERE id_compteur=".$ID."
              ORDER BY date_consomation DESC LIMIT 1";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }
    public function getT($ID)
    {
        $sql = "SELECT *
                     FROM consomation
                     WHERE consomation.id = ".$ID;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetchObject();

        }else{
            return null;
        }
    }

    public function addConsomation($index_chiffre, $index_lettre,
                                   $prix_litre_eau, $date_consomation,
                                   $id_compteur){
        $sql = "INSERT INTO consomation VALUES(null, '$index_chiffre', '$index_lettre',
'$prix_litre_eau', '$date_consomation', '$id_compteur')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteConsomation($id){
        $sql = "DELETE FROM consomation WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateConsomation($id, $index_chiffre, $index_lettre,
                                      $prix_litre_eau, $date_consomation, $id_compteur){
        $sql = "UPDATE Consomation SET index_chiffre = '$index_chiffre',
						index_lettre = '$index_lettre',
						prix_litre_eau = '$prix_litre_eau',
						date_consomation = '$date_consomation',
						id_compteur = '$id_compteur'
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeConsomation(){
        $sql = "SELECT * FROM consomation";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }



}