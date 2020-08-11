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
class Service extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/FactureDB.php';
        require_once 'model/CompteurDB.php';
        require_once 'model/ConsomationDB.php';
        require_once 'model/ClientDB.php';
        require_once 'model/AbonnementDB.php';
    }
    public function showfact(){
    $fdb = new FactureDB();
        $cmptdb = new CompteurDB();
        $consodb = new ConsomationDB();
        $clidb = new ClientDB();
        $abdb = new  AbonnementDB();
		



        if(($_POST['action'] == 'numfact') && !empty($_POST['id'])){
            //Instanciation du model
            $reponse=$fdb->getfact($_POST['id']);
            if($reponse != null)
            {
                $tab=(array)$reponse;
                foreach($tab as $key=>$value){
                    if($key==="prix_ttc"){
                        $reponse=floatval($value);
                        break;
                    }
                }
            }


        }

        if(($_POST['action'] == 'charger') && !empty($_POST['numcpt'])){
            //Instanciation du model
            $reponse = array();


        if($cmptdb->getCompteurbynum($_POST['numcpt']) != null)
         {
             $tab3 = (array)$cmptdb->getCompteurbynum($_POST['numcpt']);
             foreach($tab3 as $key=>$value){
                 if($key=='id_compteur'){
                     $id_compteur= $value;
                 }
                 if($key == 'etat'){
                     $etat=intval($value);
                 }

             }

             if($etat==0){
                 // $reponse=$fdb->getfact($_POST['id']);
                 $json_consomation = $consodb->getDernierConsomation($id_compteur);
                 $json_abonnement = $abdb->getAbonnementBycompteur($id_compteur);
                 $tab2 = (array)$json_abonnement;

                 foreach($tab2 as $key=>$value){
                     if($key=='id_client'){
                         $id_client= $value;
                     }

                 }
                 $json_client = $clidb->getClient($id_client);



                 $reponse[] = $json_client;
                 $reponse[] = $json_consomation;
                 $reponse[] = $json_abonnement;

             }


         }



        }

        echo json_encode($reponse);



    }
}
?>