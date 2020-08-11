<?php

class AbonnementDB extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getAbonnement($ID)
    {
        $sql = "SELECT *
                     FROM abonnement
                     WHERE abonnement.id = ".$ID;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }


    public function getAbonnementBycompteur($id_compteur)
    {
        $sql = "SELECT *
                     FROM Abonnement
                     WHERE Abonnement.id_compteur = ".$id_compteur;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }


    public function addAbonnement($date_abonnement, $numero_abonnement, $description_abonnement, $id_client, $id_compteur ){
        //INSERT INTO `abonnement`(`id`, `date_abonnement`, `numero_abonnement`, `description_abonnement`, `id_client`, `id_compteur`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
        $sql = "INSERT INTO abonnement VALUES(null, '$date_abonnement',
 '$numero_abonnement','$description_abonnement',
 $id_client, $id_compteur)";
        if($this->db != null)
        {
            $this->db->exec($sql);
           return $this->db->lastInsertId();//Si la clé primaire est auto_increment
             //return $this->db->exec($sql);


        }else{
            return null;
        }
    }

    public function deleteAbonnement($id){
        $sql = "DELETE FROM abonnement WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateAbonnement($id_abonnement, $date_abonnement, $description_abonement){
        $sql = "UPDATE abonnement SET date_abonnement = '$date_abonnement',
						description_abonnement = '$description_abonement'
						WHERE abonnement.id = ".$id_abonnement."";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    public function updateNumAbonnement($id,$numero_abonnement){
        $sql = "UPDATE Abonnement SET numero_abonnement = '$numero_abonnement'
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeAbonnement(){
        $sql = "SELECT * FROM abonnement";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}