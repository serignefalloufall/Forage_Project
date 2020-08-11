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
class ReglementDB extends Model{

    //La base de données samane_Reglement est dans view/Reglement
    //Pour Reglementer importer la
    public function __construct(){
        parent::__construct();
    }

    public function getReglement($ID)
    {
        $sql = "SELECT *
                     FROM reglement
                     WHERE reglement.id = ".$ID;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addReglement($numero_facture, $date_payement, $montant){
        $sql = "INSERT INTO Reglement VALUES(null, '$numero_facture', '$date_payement', '$montant')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteReglement($id){
        $sql = "DELETE FROM reglement WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateReglement($id, $valeur1, $valeur2, $valeur3){
        $sql = "UPDATE reglement SET valeur1 = '$valeur1',
						valeur2 = '$valeur2',
						valeur3 = '$valeur3'
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeReglement(){
        $sql = "SELECT * FROM reglement";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    
}