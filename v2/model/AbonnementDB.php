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
class AbonnementDB extends Model{

    //La base de données samane_Abonnement est dans view/Abonnement
    //Pour Abonnementer importer la
    public function __construct(){
        parent::__construct();
    }

    public function getAbonnement($ID)
    {
        $sql = "SELECT *
                     FROM Abonnement
                     WHERE Abonnement.ID = ".$ID;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }
    public function getAbonnementbynum($ID)
    {
        $sql = "SELECT *
                     FROM Abonnement
                     WHERE Abonnement.numero_abonnement = '$ID'";
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
        $sql = "DELETE FROM Abonnement WHERE ID = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateAbonnement($id,$date_abonnement, $numero_abonnement, $description_abonnement, $id_client, $id_compteur){
        $sql = "UPDATE Abonnement SET date_abonnement = '$date_abonnement',
						numero_abonnement = '$numero_abonnement'
						description_abonnement = '$description_abonnement'
						id_client = $id_client
						id_compteur = $id_compteur
						WHERE id = $id";

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