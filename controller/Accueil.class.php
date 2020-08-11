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
    //class
    class Accueil extends Controller{

        public function __construct(){
            require_once 'model/UtilisateurDB.php';
            parent::__construct();
        }
        //methode ou url
        public function index(){
			//view
            return $this->view->load("accueil/index");
			
        }
        public function accueil(){
			//view
            return $this->view->load("accueil/accueil");

        }
        public function connexion(){
			//view
            $data['erreur']="";
            $userdb=new UtilisateurDB();
            if(isset($_POST['connexion'])){
            if(!empty($_POST['login'])&& !empty($_POST['password'])){
                extract($_POST);
                $ok=$userdb->getConnexion($login,$password);

                if($ok!=null)
                   return $this->view->load("accueil/accueil");
                else
                    $data['erreur']="login ou mot de passe incorect";




               }
            }
             return $this->view->load("accueil/index",$data);

        }
		
    }
?>