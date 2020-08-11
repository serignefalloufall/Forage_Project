<?php

class Abonnement extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/AbonnementDB.php';
        require_once 'model/ClientDB.php';
        require_once 'model/VillageDB.php';
        require_once 'model/CompteurDB.php';
    }


    public function index(){
        session_start();
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
        $data['date'] = date("Y-m-d");
        if(isset($_POST['valider']))
        {
            extract($_POST);
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
        if(isset($_POST['modifier'])){
            extract($_POST);
            /*if(!empty($id_abonnement) && !empty($date_abonnement) && !empty($description_abonement)) {
            }*/
            $ok = $adb->updateAbonnement($id_abonnement, $date_abonnement, $description_abonement);

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




    public function modif($id){

        //Instanciation du model
        $adb = new AbonnementDB();
        //Supression
        $data['abonnement'] = $adb->getAbonnement($id);
        //chargement de la vue edit.html
        return $this->view->load("abonnement/edit", $data);
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