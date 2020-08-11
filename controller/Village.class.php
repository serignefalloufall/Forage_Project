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
    class Village extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/VillageDB.php';
        }

		//A noter que toutes les views doivent être créées dans le dossier view/Village
        //Ne Villageer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("village/index");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("village/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $tdb = new VillageDB();

            $data['village'] = $tdb->getVillageRef($id);
			
            return $this->view->load("village/get", $data);
        }
		public function liste(){
            //Instanciation du model
            $tdb = new VillageDB();
			
            $data['villages'] = $tdb->listeVillage();
			
            return $this->view->load("village/liste", $data);
        }


        public function add(){
            //Instanciation du model
            $tdb = new VillageDB();
            //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($nom_village) && !empty($nom_chef_village)) {
                    $ok = $tdb->addVillage($nom_village, $nom_chef_village);
                    $data['ok'] = $ok;
                }
                return $this->view->load("village/add", $data);
            }else{
                return $this->view->load("village/add");
            }
        }
	

		public function update(){
			//Instanciation du model
            $tdb = new VillageDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($nom_village) && !empty($nom_chef_village)) {
                    $ok = $tdb->updateVillage($id, $nom_village, $nom_chef_village);
                }
            }
            $data['villages'] = $tdb->listeVillage();
            return $this->view->load("village/liste", $data);
        }

        public function delete($id){
            //Instanciation du model
            $tdb = new VillageDB();
            //Supression
            $tdb->deleteVillage($id);
            //Retour vers la liste
            return $this->liste();
        }

        public function edit($id){

            //Instanciation du model
            $tdb = new VillageDB();
            //Supression
            $data['village'] = $tdb->getVillage($id);
            //chargement de la vue edit.html
            return $this->view->load("village/edit", $data);
        }


    }
?>