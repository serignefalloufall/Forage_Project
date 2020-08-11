<?php
/* Smarty version 3.1.30, created on 2018-07-16 08:23:42
  from "C:\xampp\htdocs\forage\view\facture\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4c39ee5212f7_41906010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac9cd6d13c8d3ff8b43f4b80df9dc4fec17719a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\facture\\add.html',
      1 => 1531721844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4c39ee5212f7_41906010 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/bootstrap.min.js"><?php echo '</script'; ?>
>


        <style>
            h1{
                color: #40007d;
            }

            body{
                background-color: #F5F5F5;
            }
            #numerofacture {
                width: 350px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-image: url('numerofactureicon.png');
                background-position: 10px 10px;
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            #numerofacture:focus {
                width: 100%;
            }
        </style>
	</head>
	<body>
    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/f4.png" class="resize" />
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">SEN-FORAGE</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Accueil/accueil">Accueil</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Service abonnement
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/liste">Liste des abonnement</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/add">Enregistrement des abonnements</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/liste">Liste des compteur</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/listecoupe">Liste des compteur coupe</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Service facturation
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/liste">Liste des factures regles</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/add">Enregistrement des factures</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/liste">Liste des reglements</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/add">Enregistrement des reglements</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Service client
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste">Liste des clients</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/liste">Liste des village</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/add">Enregistrement des villages</a></li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-default" style="border: none;">
				<div class="panel-heading"><center><h3>FORMULAIRE D'ENREGISTREMENT DES FACTURAES</h3></center></div>
				<div class="panel-body">

					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/add">
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th  colspan="3">

                                        <div class="form-wrapper cf">
                                            <input type="text" name="num_compteur" placeholder="Entrez le numero du compteur.." id="numerofacture">

                                        </div>
                                        <input type="hidden" name="id_compteur"  id="id_compteur">
                                        <input type="hidden" name="num_facture"  id="num_facture" value="<?php echo $_smarty_tpl->tpl_vars['num_facture']->value;?>
">
                                        <input type="hidden" name="type_facture"  id="type_facture" value="facture  ">

                                    </th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td  colspan="3">



                                        <div class="row">
                                            <div class="col-sm-6" style="background-color:white;">
                                                <label for="nom">Client:</label>
                                                <input type="text" class="form-control" id="nom" readonly>
                                            </div>

                                            <div class="col-sm-4" style="background-color:white;">
                                                <label for="adresse">adresse:</label>
                                                <input type="text" class="form-control" id="adresse" readonly>
                                            </div>

                                            <div class="col-sm-2" style="background-color:white;" >
                                                <label for="abone"> Abonnement N°:</label>
                                                <input type="text" class="form-control" id="numab" readonly name="num">
                                            </div>
                                        </div>
                                    </td>


                                </tr>
                                <tr>
                                    <td  colspan="3">



                                        <div class="row">
                                            <div class="col-sm-4" style="background-color:white;">
                                                <label for="nom">Date facturation:</label>
                                                <input type="date"value="<?php echo $_smarty_tpl->tpl_vars['datef']->value;?>
" class="form-control" id="date" name="date_facturation" >
                                            </div>

                                            <div class="col-sm-4" style="background-color:white;">
                                                <label for="adresse">Ancien index:</label>
                                                <input type="number" class="form-control" id="aindex" readonly>
                                            </div>

                                            <div class="col-sm-4" style="background-color:white;" id="nvindex">
                                               
                                            </div>
                                        </div>
                                    </td>


                                </tr>
                                <tr>
                                    <th>Quantite consome</th>
                                    <th>Prix </th>
                                    <th>Montant </th>
                                </tr>
                                <tr>

                                    <td><input type="number" class="form-control" id="qnt" name="qte_consome" ></td>
                                    <td><input type="text" class="form-control" id="prix" name="prix_litre_eau" value="0.5" readonly></td>
                                    <td><input type="text" class="form-control" id="mts" name="prix_ht"></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-block" id ="calculer">Calculer la consomation</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <th >
                                        Montant hors taxe :
                                    </th>
                                    <td><input type="text" class="form-control" id="ht" readonly></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>
                                        Montant de la TVA :
                                    </th>
                                    <td><input type="text" class="form-control" id="tva" value="" readonly name="tva"></td>
                                </tr>
                                <tr>

                                    <th colspan="2">
                                        MONTANT NET A PAYE :                                    </td>

                                    <th>
                                    <input type="text" name="prix_ttc" class="form-control" id="ttc" placeholder="Prix TTC" readonly>

                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Enregistrer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
        <?php echo '<script'; ?>
>
            //alert("yess");
            $(document).ready(function(){

                $("#numerofacture").change(function(){
                    // $("#num_facture").css("backgroundColor","yellow");
                    var num_cmpt = $("#numerofacture").val();
                   /* var num_cmpt = $(this).val();
                    alert($(this).val());*/


                    // alert("yess");

                    var urll='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Service/showfact';
                    // alert(urll);

                    $.ajax({
                        url:urll,
                        type:'POST',
                     //   data:'numfact='+num_fact,
                        data:'action=charger&numcpt='+num_cmpt,
                        dataType:"json",
                       success: function(json){
                            var x=0;
                            $.each(json, function(index, value){
                                for(var i=0;i<3;i++){

                                   $.each(value, function(index, value){

                                        if(index=="id_compteur")
                                            $("#id_compteur").val(value);
                                        if(index=="nom_famille")
                                            $("#nom").val(value);
                                        if(index=="adresse")
                                            $("#adresse").val(value);
                                        if(index=="numero_abonnement")
                                            $("#numab").val(value);
                                        if(index=="index_chiffre")
                                            $("#aindex").val(value);

                                        if(index=="index_chiffre" ){

                                            if(x==0){
                                               $("#nvindex").html(' <label for="abone"> Nouvele index:</label><input class="form-control"  name="index_chiffre" type="number"  min="'+value+'" step="1"  name="index_chiffre" placeholder="Entrer Nouveaux index"  id="nindex" required>');

                                            }
                                            x=x+1;
                                        }

                                       if(index=="id_consomation")
                                            $("#idconso").val(value);
                                        if(index=="date_consomation"){
                                            $("#adate").val(value);

                                        //id_consomation id_compteur
                                        }



                                    });
                                }




                            });


                        }
                   
					  });
                });
				 $("#calculer").click(function(){
                    // $("#num_facture").css("backgroundColor","yellow");
                    var date = $("#date").val();
                    var aindex = $("#aindex").val();
                    var nindex = $("#nindex").val();
                    var prix = $("#prix").val();
                    var qnt = nindex - aindex;
                    var mtss = qnt * prix;

                     var mts = mtss.toFixed(2);

                     var tva= mts * 0.18;
                     var ttcs =  parseFloat(mts) + parseInt(tva);

                     var ttc = ttcs.toFixed(2);

                    $("#qnt").val(qnt);
                    $("#mts").val(mts);

                     $("#tva").val(tva);
                    $("#ht").val(mts);
                    $("#ttc").val(ttcs);
                    $("#dateconso").val(date);


                });
            });
        <?php echo '</script'; ?>
>
	</body>
</html><?php }
}
