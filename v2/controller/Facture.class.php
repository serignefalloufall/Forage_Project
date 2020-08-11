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
class Facture extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/FactureDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/Facture
    //Ne Factureer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){
        return $this->view->load("Facture/index");
    }

    public function getID($id){
        $data['ID'] = $id;

        return $this->view->load("Facture/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $tdb = new FactureDB();

        $data['Facture'] = $tdb->getFacture($id);
        $fall['var']= $tdb->getFacture($id);
        // $data['idt'] = $var['valeur1'];

        return $this->view->load("Facture/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $fdb = new FactureDB();

        $data['factures'] = $fdb->listeFactureRegle();

        return $this->view->load("facture/liste", $data);
    }

    public function listeNonRegle(){
        //Instanciation du model
        $fdb = new FactureDB();

        $data['factures'] = $fdb->listeFactureNonRegle();

        return $this->view->load("facture/listenonregle", $data);
    }


    public function add(){
        //Instanciation du model
        $fdb = new FactureDB();
        //Récupération des données qui viennent du formulaire view/Facture/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            $data['ok'] = 0;

                $ok = $fdb->addFacture($num_facture, $date_facturation, $date_payement, $prix_ht,
                    $tva, $prix_ttc, $etat_facture, $id_consomation, $etat, $id_type);
                $data['ok'] = $ok;

            return $this->view->load("facture/add", $data);
        }else{
            return $this->view->load("facture/add");
        }
    }
    public function update(){
        //Instanciation du model
        $tdb = new FactureDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id) && !empty($valeur1) && !empty($valeur2)) {
                $ok = $tdb->updateFacture($id, $valeur1, $valeur2);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $tdb = new FactureDB();
        //Supression
        $tdb->deleteFacture($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $tdb = new FactureDB();
        //Supression
        $data['Facture'] = $tdb->getFacture($id);
        //chargement de la vue edit.html
        return $this->view->load("Facture/edit", $data);
    }




}
?>