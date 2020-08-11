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
class FactureDB extends Model{

    //La base de données samane_Facture est dans view/Facture
    //Pour Factureer importer la 
    public function __construct(){
        parent::__construct();
    }

    public function getFacture($ID)
    {
        $sql = "SELECT *
                     FROM facture
                     WHERE facture.id = ".$ID;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getfact($numero)
    {
        $sql = "SELECT *
                     FROM facture
                     WHERE facture.num_facture = '$numero'";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        }else{
            return null;
        }
    }

    public function addFacture($num_facture, $date_facturation, $date_payement, $prix_ht, $tva,
                               $prix_ttc, $etat_facture, $id_consomation, $etat, $id_type){
        $sql = "INSERT INTO facture VALUES(null, '$num_facture', '$date_facturation', '$date_payement', '$prix_ht', '$tva',
                               '$prix_ttc', '$etat_facture', '$id_consomation', '$etat', '$id_type')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteFacture($id){
        $sql = "DELETE FROM facture WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateFacture($id,$num_facture, $date_facturation, $date_payement, $prix_ht, $tva,
                                  $prix_ttc, $etat_facture, $id_consomation, $etat, $id_type){
        $sql = "UPDATE Facture SET valeur1 = '$valeur1',
						valeur2 = '$valeur2'
						WHERE ID = $idFacture";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeFactureRegle(){
        $sql = "SELECT * FROM facture WHERE  etat= 1";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    public function listeFactureNonRegle(){
        $sql = "SELECT * FROM facture WHERE  etat= 0";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }


    public function MajEtatFacture($num,$etat){
        $sql = "UPDATE facture SET etat = ".$etat."

						WHERE facture.num_facture = '$num'";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }


}