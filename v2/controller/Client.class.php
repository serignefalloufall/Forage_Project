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
class Client extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/ClientDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){
        return $this->view->load("client/liste");
    }


    public function liste(){
        //Instanciation du model
        $clidb = new ClientDB();

        $data['clients'] = $clidb->listeClient();

        return $this->view->load("client/liste", $data);
    }

    public function delete($id){
        //Instanciation du model
        $clidb = new ClientDB();
        //Supression
        $clidb->deleteClient($id);
        //Retour vers la liste
        return $this->liste();
    }
}
?>