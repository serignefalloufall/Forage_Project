<?php

class ClientDB extends Model{

    //La base de données samane_Client est dans view/Client
    //Pour Clienter importer la
    public function __construct(){
        parent::__construct();
    }

    public function getClient($ID)
    {
        $sql = "SELECT *
                     FROM client
                     WHERE client.id = ".$ID;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }
/*
 *  public function getClientByTel($tel,$nom,$adresse)
    {
        $sql = "SELECT id
                     FROM client
                     WHERE client.tel = ".$tel." and client.nom_famille = ".$nom." and client.adresse = ".$adresse;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();

        }else{
            return null;
        }
    }
 */
    public function getClientByTel($tel)
    {
        $sql = "SELECT id
                     FROM client
                     WHERE client.tel = '$tel'";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();

        }else{
            return null;
        }
    }


    public function addClient($nom_famille, $adresse, $tel, $id_village){
        $sql = "INSERT INTO client VALUES(null, '$nom_famille', '$adresse', '$tel', '$id_village')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteClient($id){
        $sql = "DELETE FROM client WHERE client.id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateClient($id,$nom_famille, $adresse, $tel, $id_village){
        $sql = "UPDATE client SET nom_famille = '$nom_famille',
						adresse = '$adresse',
						tel = '$tel',
						id_village = '$id_village'
						WHERE client.id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeClient(){
        $sql = "SELECT * FROM client";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}