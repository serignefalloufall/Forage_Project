<?php
/* Smarty version 3.1.30, created on 2018-07-06 01:57:28
  from "C:\xampp\htdocs\forage\view\Facture\imprimer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3eb0680c8f10_74741257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76778e8d5bb23aecf4e0adf00592614ad4bdd759' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\Facture\\imprimer.html',
      1 => 1530834990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3eb0680c8f10_74741257 (Smarty_Internal_Template $_smarty_tpl) {
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
 language=javascript>
        function load_design() {
            document.getElementById("design_js").style.color = "#40007d";
        }

    <?php echo '</script'; ?>
>
    
</head>
<body onload="load_design()">
<div class="nav navbar navbar-default navbar-fixed-top">
    <ul class="nav navbar-nav">
        <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu page test</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/add">page d'ajout</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/add">page d'ajout Fact</a></li>

        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu page test 2</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu page test liste</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/liste">Liste abonnements</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste">Liste Clients</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/liste">Liste compteurs</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/liste">Liste reglement</a></li>

    </ul>
</div>

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
                <?php if (isset($_smarty_tpl->tpl_vars['factures']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['factures']->value != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['factures']->value, 'facture');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facture']->value) {
?>

                <table class="table">
                    <thead >
                    <tr>
                        <th>
                            <div class="card" >
                                <div class="card-body">
                                    <h2 class="card-title" style="color: blue;">SEN-FORAGE</h2><br/>
                                    <h5 class="card-title">Siege sociale :</h5>
                                    <h5 class="card-title">Tel :<?php echo $_smarty_tpl->tpl_vars['facture']->value['tel'];?>
</h5>
                                    <h5 class="card-title">R.C :</h5>

                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="card" >
                                <div class="card-body">
                                    <h3 class="card-title" style="color: blue;">Facture numero :</h3>
                                    <h5 class="card-title">Date :</h5>
                                    <h5 class="card-title">Abonnement :</h5>
                                    <h5 class="card-title">Compteur :</h5>

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
                                            <h5 class="card-title">Nom ou Raison social :</h5>
                                            <h5 class="card-title">Adresse :</h5>

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
                                            <td>Periode du :</td>
                                            <td>Au :</td>
                                            <td>Nombre de jour :</td>
                                        </tr>
                                        <tr>
                                            <td>Ancien index : </td>
                                            <td>Nouvel index :</td>
                                            <td>Consomation(l)</td>
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
                                            <th>Prix</th>
                                            <th>Quantite</th>
                                            <th>Montant</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1500</td>
                                            <td>12</td>
                                            <td>1000000</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Total</strong></td>
                                            <td>1500</td>
                                            <td>1000000</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><h2>MONTANT NET A PAYER</h2></td>
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
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </table>
                <?php } else { ?>
                Liste vide
                <?php }?>
                <?php }?>

            </div>
        </div>
    </div>

    <button class="btn btn-default" type="button" value="Print 1st Div" onclick="javascript:printDiv('printablediv')" >Imprimer</button>
    <a class="btn btn primar">Retour</a>

</form>
</body>
</html><?php }
}
