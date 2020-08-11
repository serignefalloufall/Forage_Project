<?php
/* Smarty version 3.1.30, created on 2018-07-16 23:27:31
  from "C:\xampp\htdocs\forage\view\facture\imprimer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4d0dc3523696_28187657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c88adcb752b4d716f9cc4480697687829833c7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\facture\\imprimer.html',
      1 => 1531776449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4d0dc3523696_28187657 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>page d'accueil</title>
    <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
    <!-- integration de javascript dans le moteur de rendu de vue Smarty -->
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
    body{
        background-color: #F5F5F5;
    }
</style>
    
    <?php echo '<script'; ?>
 language=javascript>
        function load_design() {
            document.getElementById("design_js").style.color = "#40007d";
        }

    <?php echo '</script'; ?>
>
    
</head>
<body onload="load_design()">
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

<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
    function printDiv(divID) {
        //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;

        //Reset the page's HTML with div's HTML only
        document.body.innerHTML =
                "<html><head><title></title></head><body>" +
                divElements + "</body>";

        //Print Page
        window.print();

        //Restore orignal HTML
        document.body.innerHTML = oldPage;


    }
<?php echo '</script'; ?>
>



<form id="form1" runat="server">

    <div id="printablediv" >

        <div class="container">
            <div class="table-responsive" style="margin-top:5%;">
                <table class="table">
                    <thead >
                    <tr>
                        <th>
                            <div class="card" >
                                <div class="card-body">
                                    <h2 class="card-title" style="color: blue;">SEN-FORAGE</h2><br/>
                                    <h5 class="card-title">Tel :<?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['tel'];
}?>
                                    </h5>
                                    <h5 class="card-title">Adresse : <?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['adresse'];
}?></h5>

                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="card" >
                                <div class="card-body">
                                    <h3 class="card-title" style="color: blue;">Facture numero :<?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['num_facture'];
}?></h3>
                                    <h5 class="card-title">Date :<?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['date_facturation'];
}?></h5>
                                    <h5 class="card-title">Abonnement : <?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['numero_abonnement'];
}?></h5>
                                    <h5 class="card-title">Compteur : <?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['numero_compteur'];
}?></h5>

                                </div>
                            </div>
                        </th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>

                        <td colspan="2">
                            <div class="row"  style="width: 90%;margin-left: 5%; ">

                                <div class="col-md-2">

                                </div>
                                <div class="col-md-8">
                                    <div class="card" >
                                        <div class="card-body">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="row"  style="width: 80%;margin-left: 10%; ">
                                <div class="col-lg-10">
                                    <table class="table">

                                        <tbody>
                                        <tr>
                                            <td>Periode du : <?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['date_facturation'];
}?></td>
                                            <td>Au : <?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['date_payement'];
}?></td>
                                        </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">

                            <div class="row"  style="width: 80%;margin-left: 10%; ">
                                <div class="col-lg-10">

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Quantite consome</th>
                                            <th>Prix litre d'eau</th>
                                            <th>Montant HT</th>
                                            <th>TVA 18%</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['index_chiffre'];
}?></td>
                                            <td><?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['prix_litre_eau'];
}?></td>
                                            <td><?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo ($_smarty_tpl->tpl_vars['facture']->value['index_chiffre'])*($_smarty_tpl->tpl_vars['facture']->value['prix_litre_eau']);
}?></td>
                                            <td><?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo (($_smarty_tpl->tpl_vars['facture']->value['index_chiffre'])*($_smarty_tpl->tpl_vars['facture']->value['prix_litre_eau']))*0.18;
}?></td>
                                        </tr>

                                        <tr>
                                            <td><h2>MONTANT NET A PAYER : </h2></td>
                                            <td><h2><?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['prix_ttc'];
}?></h2></td>

                                        </tr>


                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <center>
    <button class="btn btn-primary" type="button" value="Print 1st Div" onclick="javascript:printDiv('printablediv')" >Imprimer</button>
    </center>
</form>
</body>
</html><?php }
}
