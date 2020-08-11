<?php

class FactureDB extends Model{

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
    public function getIdCompteur($idfacture)
    {
        $sql = "SELECT * FROM `compteur` WHERE
id=(SELECT id_compteur FROM consomation WHERE
 id=(SELECT id_consomation FROM facture WHERE id=".$idfacture.")) ";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function ControllerFacture()
    {
        $fdb=new FonctionDB();
        $date=date("Y-m-d");
        $moispasse=$fdb->MoisPasse($date);

        $sql="SELECT * FROM `facture` WHERE etat=0 AND date_payement <'$moispasse'";
        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;

    }
public function ConterFacture()
    {
        $fdb=new FonctionDB();

        $date=date("Y-m-d");
        $moispasse=$fdb->MoisPasse($date);

        $sql="SELECT COUNT(id) as 'nbr_facture' FROM `facture` WHERE etat=0 AND date_payement <'$moispasse'";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }

    }

    public function Desactiver($id,$prix){
        $sql = "UPDATE facture SET etat = 2,prix_ttc='$prix'
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
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
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addFacture($num_facture, $date_facturation, $date_payement, $prix_ht, $tva,
                               $prix_ttc,  $id_consomation, $etat, $qte_consome){
        $sql = "INSERT INTO facture VALUES(null, '$num_facture', '$date_facturation', '$date_payement', '$prix_ht', '$tva',
                               '$prix_ttc', '$id_consomation', '$etat', '$qte_consome')";
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

    public function updateFacture($id,$date_facturation, $date_payement,
                                  $prix_ht,$prix_ttc,$etat, $qte_consome){
        $sql = "UPDATE facture SET date_facturation = '$date_facturation',
						date_payement = '$date_payement',
						prix_ht = '$prix_ht',
						prix_ttc = '$prix_ttc',
						etat = '$etat',
						qte_consome = '$qte_consome'
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    public function UpdateEtatFacture($numfact){
        $sql = "UPDATE `facture` SET `etat`=1 WHERE facture.num_facture='$numfact'";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeFacture(){
        $sql = "SELECT * FROM facture WHERE facture.etat=1";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }

    public function listeFactureNonpaye(){
        $sql = "SELECT * FROM Facture WHERE etat = 0";;

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }


    public function getDernierFacture()
    {
        $sql = "SELECT * FROM `facture`

              ORDER BY id DESC LIMIT 1";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function chargerfacture($idfact)
    {
        $sql = "SELECT * FROM v_details_facture WHERE v_details_facture.id=".$idfact;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getfac($ID)
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
}