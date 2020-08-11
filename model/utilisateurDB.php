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
    class UtilisateurDB extends Model{
		
		//La base de données samane_Utilisateur est dans view/Utilisateur
		//Pour Utilisateurer importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getUtilisateur($ID)
        {
            $sql = "SELECT *
                     FROM Utilisateur
                     WHERE Utilisateur.ID = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }

        public function getConnexion($login,$password)
        {
            $sql = "SELECT *
                     FROM utilisateur
                     WHERE utilisateur.login ='$login' and utilisateur.pwd ='$password' ";
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
				//return $sql;
			}else{
				return null;
			}
        }
        public function getT($ID)
        {
            $sql = "SELECT *
                     FROM Utilisateur
                     WHERE Utilisateur.ID = ".$ID;
            if($this->db != null)
			{
                return $this->db->query($sql)->fetchObject();

			}else{
				return null;
			}
        }
		
		public function addUtilisateur($valeur1, $valeur2){
			$sql = "INSERT INTO Utilisateur VALUES(null, '$valeur1', '$valeur2')";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deleteUtilisateur($id){
			$sql = "DELETE FROM Utilisateur WHERE ID = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateUtilisateur($idUtilisateur, $valeur1, $valeur2){
			$sql = "UPDATE Utilisateur SET valeur1 = '$valeur1',
						valeur2 = '$valeur2'
						WHERE ID = $idUtilisateur";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function listeUtilisateur(){
			$sql = "SELECT * FROM Utilisateur";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}


        public function countCompteur(){
            $sql = "SELECT COUNT(id) FROM Utilisateur";

            if($this->db != null)
                return $this->db->query($sql)->fetch();
            else
                return null;
        }
	}