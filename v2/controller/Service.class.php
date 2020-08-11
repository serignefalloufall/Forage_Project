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
    public function getfact(){
        $fdb = new FactureDB();
        $cmptdb = new CompteurDB();
        $consodb = new ConsomationDB();
        $clidb = new ClientDB();
        $abdb = new AbonnementDB();
        $returnData = array(
            'status' => 'error',
            'msg1' => 'Problème ',
            'msg' => 'Problème de modification essayer encore..',
            'data' => '55'
        );
        $reponse=$returnData;

        if(($_POST['action'] == 'numfact') && !empty($_POST['id'])){
            //Instanciation du model

        if($abdb->getfact($_POST['id']) != null)
         {
            $reponse=$abdb->getfact($_POST['id']);
             echo json_encode($reponse);

         }

        }
        if(($_POST['action'] == 'charger') && !empty($_POST['id'])){
            //Instanciation du model

       /* if($fdb->getfact($_POST['id']) != null)
         {
            $reponse=$fdb->getfact($_POST['id']);
             echo json_encode($reponse);

         }*/
            if($cmptdb->getCompteur($_POST['id']) != null)
            {
                $reponse=$cmptdb->getCompteur($_POST['id']);
                echo json_encode($reponse);

            }
        }





    }
}
?>