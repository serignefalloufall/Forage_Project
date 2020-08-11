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
class Abonnement extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/AbonnementDB.php';
        require_once 'model/ClientDB.php';
        require_once 'model/VillageDB.php';
        require_once 'model/CompteurDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/Abonnement
    //Ne Abonnementer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){
        return $this->view->load("abonnement/index");
    }

    public function getID($id){
        $data['ID'] = $id;

        return $this->view->load("abonnement/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $tdb = new AbonnementDB();

        $data['Abonnement'] = $tdb->getAbonnement($id);

        return $this->view->load("abonnement/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $tdb = new AbonnementDB();

        $data['abonnements'] = $tdb->listeAbonnement();

        return $this->view->load("abonnement/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $adb = new AbonnementDB();
        $vdb = new VillageDB();
        $cdb = new CompteurDB();
        $clidb = new ClientDB();


        $data['villages'] = $vdb->listeVillage();
        $data['compteurs'] = $cdb->listeCompteur();
        $data['clients'] = $clidb->listeClient();
        $data['abonnements'] = $adb->listeAbonnement();

        $data['i'] = 0;
        $data['j'] = 0;
        $data['date'] = $date = date("Y-m-d");
        //Récupération des données qui viennent du formulaire view/Abonnement/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);

            /*
             *             $ok =$nom_famille." / ".$adresse ." / ".$tel." / ".$id_village
                ." / ".$date_abonnement." / ".$numero_abonnement." / ".$id_compteur." / ".$valider;
             */
            $data['ok'] = 0;
            $id_client = $id_asclient;
                if($etat==0){
                    if($clidb->getClientByTel($tel)== null)
                    {
                        $id_client = $clidb->addClient($nom_famille, $adresse, $tel, $id_village);

                    }else{
                        $tab = (array)$clidb->getClientByTel($tel);
                        foreach($tab as $key=>$value){
                            // echo $key." -> ".$value."<br>";
                            if($key=='id'){
                                $id_client = $value;
                            }
                        }
                    }
                }


           $numc='Cmpt'.$date_abonnement.''.strval(sizeof($adb->listeAbonnement())+1).'0'.strval(sizeof($cdb->listeCompteur())+1);
            $id_compteur=$cdb->addCompteur($numc,$date_abonnement);

            $id_abonnement = $adb->addAbonnement($date_abonnement, $numero_abonnement, $description_abonnement, $id_client, $id_compteur );
            $numero_abonnement='Abn'.$date_abonnement.'0'.strval($id_abonnement);
            $ok = $adb->updateNumAbonnement($id_abonnement,$numero_abonnement);
            $data['ok'] = $ok;

           return $this->view->load("abonnement/add", $data);
        }else{
           return $this->view->load("abonnement/add", $data);
        }
    }
    public function update(){
        //Instanciation du model
        $adb = new AbonnementDB();
        $vdb = new VillageDB();
        $cdb = new CompteurDB();
        $clidb = new ClientDB();

        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($nom_famille) && !empty($adresse)
                && !empty($tel) && !empty($id_village)
                && !empty($date_abonnement)  && !empty($numero_abonnement)
                && !empty($description_abonnement)  && !empty($id_compteur) ) {

                if($clidb->getClientByTel($tel)== null)
                {
                    $id_client = $clidb->addClient($nom_famille, $adresse, $tel, $id_village);

                }else{
                    $ok = $clidb->updateClient($id_client,$nom_famille, $adresse, $tel, $id_village);

                }
                if($cdb->getCompteur($id_compteur)== null)
                {
                    $idc=$cdb->addCompteur($id_compteur);
                    $id_compteur=$idc;
                }
                $ok = $adb->updateAbonnement($id,$date_abonnement, $numero_abonnement, $description_abonnement, $id_client, $id_compteur);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $tdb = new AbonnementDB();
        //Supression
        $tdb->deleteAbonnement($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $tdb = new AbonnementDB();
        $clidb = new ClientDB();
        $vdb = new VillageDB();
        $cdb = new CompteurDB();
        //Supression
       // $data['Abonnement'] = $tdb->getAbonnement($id);
       $data['villages'] = $vdb->listeVillage();
       $data['compteurs'] = $cdb->listeCompteur();
       $data['id_abonnement'] =$id;
        $view=false;
        $tab = (array)$tdb->getAbonnement($id);
        //SELECT `id`, `date_abonnement`,
        // `numero_abonnement`, `description_abonnement`,
        // `id_client`, `id_compteur` FROM `abonnement` WHERE 1

        if($tdb->getAbonnement($id)!= null)
        {
            foreach($tab as $key=>$value){
                // echo $key." -> ".$value."<br>";
                if($key=='numero_abonnement'){
                    $data['numero_abonnement'] = $value;
                }
                if($key=='date_abonnement'){
                    $data['date_abonnement'] = $value;
                }
                if($key=='description_abonnement'){
                    $data['description_abonnement'] = $value;
                }
                if($key=='id_client'){
                    $data['id_client'] = $value;
                    $id_client = $value;
                }
                if($key=='id_compteur'){
                    $data['id_compteur'] = $value;
                    $id_compteur = $value;
                }
            }
            $tab2 = (array)$clidb->getClient($id_client);
            foreach($tab2 as $key=>$value){
                // echo $key." -> ".$value."<br>";
// SELECT `id`, `nom_famille`,
// `adresse`, `tel`, `id_village` FROM `client` WHERE 1

                if($key=='nom_famille'){
                    $data['nom_famille'] = $value;
                }
                if($key=='adresse'){
                    $data['adresse'] = $value;
                }
                if($key=='tel'){
                    $data['tel'] = $value;
                }
                if($key=='id_village'){
                    $data['id_village'] = $value;
                    $id_village = $value;
                }
            }
            $tab3 = (array)$vdb->getVillage($id_village);
            foreach($tab3 as $key=>$value){
                // SELECT `id`, `nom_village`, `nom_chef_village` FROM `village` WHERE 1
                if($key=='nom_village'){
                    $nom_village = $value;
                    $data['nom_village'] = $value;
                }

            }
            $tab = (array)$cdb->getCompteur($id_compteur);
            foreach($tab as $key=>$value){
                // SELECT `id`, `numero_compteur` FROM `compteur` WHERE 1
                if($key=='numero_compteur'){
                    $numero_compteur = $value;
                }
            }
            $view=true;
        }






        //chargement de la vue edit.html
        if($view==true)
        return $this->view->load("abonnement/edit", $data);
        else
            return $this->view->load("abonnement/liste");
    }
}
?>