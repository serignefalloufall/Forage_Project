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
class Reglement extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/ReglementDB.php';
        require_once 'model/FactureDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/Reglement
    //Ne Reglementer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){
        return $this->view->load("reglement/index");
    }

    public function getID($id){
        $data['ID'] = $id;

        return $this->view->load("reglement/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $tdb = new reglementDB();

        $data['reglement'] = $tdb->getReglement($id);
        $fall['var']= $tdb->getReglement($id);
        // $data['idt'] = $var['valeur1'];

        return $this->view->load("Reglement/get", $data);
    }

    public function liste(){
        //Instanciation du model
        $rdb = new ReglementDB();

        $data['reglements'] = $rdb->listeReglement();

        return $this->view->load("reglement/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $tdb = new ReglementDB();
        $fdb = new FactureDB();
        //Récupération des données qui viennent du formulaire view/Reglement/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            $data['ok'] = 0;

                $ok = $tdb->addReglement($num_facture, $date_payement, $montant);
            $fdb->MajEtatFacture($num_facture,1);
                $data['ok'] = $ok;

            return $this->view->load("Reglement/add", $data);
        }else{
            return $this->view->load("Reglement/add");
        }
    }
    public function update(){
        //Instanciation du model
        $tdb = new ReglementDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id) && !empty($valeur1) && !empty($valeur2)) {
                $ok = $tdb->updateReglement($id, $valeur1, $valeur2);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $tdb = new ReglementDB();
        $fdb = new FactureDB();
        $tab=(array)$tdb->getReglement($id);
        foreach($tab as $key=>$value){
            if($key=="numero_facture"){
                $num_facture=$value;
                $fdb->MajEtatFacture($num_facture,0);
                $tdb->deleteReglement($id);
            }


        }
        //Supression
      /*if(($fdb->MajEtatFacture($num_facture,0))!=null){
          $tdb->deleteReglement($id);
          //Retour vers la liste
      }*/
       return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $tdb = new ReglementDB();
        //Supression
        $data['Reglement'] = $tdb->getReglement($id);
        //chargement de la vue edit.html
        return $this->view->load("Reglement/edit", $data);
    }
}
?>