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
        require_once 'model/FonctionDB.php';
        require_once 'model/ConsomationDB.php';
        require_once 'model/CompteurDB.php';
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
        $tdb = new FactureDB();

        $data['factures'] = $tdb->listeFacture();

        $i=0;

        $tabfac=(array)$tdb->ConterFacture();


        $data['i']=$tabfac[0];

        return $this->view->load("facture/liste", $data);
    }

    public function nonpaye(){
        //Instanciation du model
        $fdb = new FactureDB();

        $data['factures'] = $fdb->ControllerFacture();
        //var_dump($data);
       return $this->view->load("facture/listenonpaye", $data);
    }


    public function add(){
        //Instanciation du model
        $fdb = new FactureDB();
        $compdb = new CompteurDB();
        $cdb = new ConsomationDB();
        $foncdb = new FonctionDB();
        $data['datef'] = date("Y-m-d");
        $tabfac=(array)$fdb->getDernierFacture();

        foreach($tabfac as $key=>$value){
            if($key==="id")
            {
                $nbr=$value+1;
                break;
            }
        }
        $data['num_facture']='fact'.'00'.$nbr;

        //Récupération des données qui viennent du formulaire view/Facture/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            $index_lettre=$foncdb->convertir($index_chiffre);
             $date_payement=$foncdb->DateLimitePayement($date_facturation);
            $id_consomation=$cdb->addConsomation($index_chiffre, $index_lettre,
                $prix_litre_eau, $date_facturation,
                $id_compteur);
            if($id_consomation!=0)
            {
                $data['ok'] = 0;

                $ok = $fdb->addFacture($num_facture, $date_facturation, $date_payement, $prix_ht, $tva,
                    $prix_ttc,  $id_consomation, 0, $qte_consome);
                $data['ok'] = $ok;


                return $this->view->load("facture/add", $data);
            }
        }else{


            return $this->view->load("facture/add", $data);
        }
    }
    public function update(){
        //Instanciation du model
        $fdb = new FactureDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            $ok = $fdb->updateFacture($id,$date_facturation,$date_payement,
                $prix_ht,$prix_ttc,$etat, $qte_consome);


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
        $fdb = new FactureDB();
        //Supression
       $data['facture'] = $fdb->getFacture($id);
        //chargement de la vue edit.html
        return $this->view->load("facture/edit",$data);
    }
    public function imprimer($id){

        //Instanciation du model
        $tdb = new FactureDB();
        //Supression
       $data['facture'] = $tdb->chargerfacture($id);
       $data['fac'] = $tdb->getfac($id);
        //chargement de la vue edit.html
        return $this->view->load("facture/imprimer", $data);
    }
    public function couper($id){

        //Instanciation du model
        $cmptdb = new CompteurDB();
        $fdb = new FactureDB();
        $cdb = new ConsomationDB();
        //Supression
        $data['facture'] = $fdb->getFacture($id);
        $data['compteur'] = $fdb->getIdCompteur($id);

        //chargement de la vue edit.html
       return $this->view->load("Facture/boncoupure", $data);
    }


    public function updatecouper(){
        //Instanciation du model
        $fdb = new FactureDB();
        $cdb = new CompteurDB();
        extract($_POST);
        $fdb->Desactiver($id_facture,$prix_ttc);
        $cdb->Couper($id_compteur);

        return $this->nonpaye();//appel de la methode liste du controller
    }

}
?>