<?php

class VillageDB extends Model{

    //La base de données samane_Village est dans view/Village
    //Pour Villageer importer la 
    public function __construct(){
        parent::__construct();
    }

    public function getVillage($ID)
    {
        $sql = "SELECT *
                     FROM village
                     WHERE Village.ID = ".$ID;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addVillage($nom_village, $nom_chef_village){
        $sql = "INSERT INTO village VALUES(null, '$nom_village', '$nom_chef_village')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteVillage($id){
        $sql = "DELETE FROM village WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateVillage($id, $nom_village, $nom_chef_village){
        $sql = "UPDATE village SET nom_village = '$nom_village',
						nom_chef_village = '$nom_chef_village'
						WHERE village.id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeVillage(){
        $sql = "SELECT * FROM village";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}