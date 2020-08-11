<?php
/* Smarty version 3.1.30, created on 2020-06-14 22:55:04
  from "C:\xampp\htdocs\forage\view\abonnement\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ee68ea844e8a9_88072188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8a047f76e3187aff1027f0a1bc138e885a61656' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\abonnement\\add.html',
      1 => 1566361018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee68ea844e8a9_88072188 (Smarty_Internal_Template $_smarty_tpl) {
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


        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $("#btncli").click(function(){

                    $(".ansclient").slideUp();
                    $(".newclient").slideDown();
                    $("#etat").val(0);
                });
                $("#btascli").click(function(){
                    $("#etat").val(1);
                    $(".newclient").slideUp();
                    $(".ansclient").slideDown();
                });
            });
        <?php echo '</script'; ?>
>
        <style>
			h1{ 
				color: #40007d;
			}
            body{
                background-color: #F5F5F5;
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
                    <li class="dropdown active">
                        <a class="dropdown-toggle"  data-toggle="dropdown" href="#">Service abonnement
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
                    <li class="dropdown">
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


        <style>
            .ansclient{
                display: none;
            }
            </style>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/add">

        <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">


			<div class="panel panel-default">
				<div class="panel-heading">
                    ABONNEMENT NUMERO :
                    <div class="form-group" style="display: inline-block">
                        <?php if (isset($_smarty_tpl->tpl_vars['abonnements']->value)) {?>


                        <div style="display: none;">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['abonnements']->value, 'abonnement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['abonnement']->value) {
?> <?php echo $_smarty_tpl->tpl_vars['j']->value++;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                        </div>
                        <input class="form-control" style="background-color: #2bcbba; border: none;" readonly type="text" name="numero_abonnement" value="Abn-<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['j']->value+1;?>
"/>

                        <input type="hidden" name="id" readonly value="<?php echo $_smarty_tpl->tpl_vars['j']->value+1;?>
">

                        <?php } else { ?>
                        Liste vide
                        <?php }?>
                    </div>
                </div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Votre abonnement a bien été enregistrée avec succés!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur</div>
						<?php }?>
					<?php }?>
                        <div class="widget-box">
                            <div>
                                <button type="button" class="btn btn-success btn-md" id="btncli">Nouveau client</button>
                                    <button type="button" class="btn btn-info btn-md" id="btascli">Ancien client</button>
                            </div>
                            <div class="widget-header">
                                <h2 class="widget-title"><p class="text-primary">Informations du client</p></h2>
                            </div>
                            <input type="hidden" name="etat" value="0" id="etat">

                            <div class="widget-body">
                                <div class="form-group ansclient" >
                                    <label class="control-label">Liste des clients</label>
                                    <?php if (isset($_smarty_tpl->tpl_vars['clients']->value)) {?>
                                    <select name="id_asclient" class="form-control" >
                                        <option value="" disabled>---choisir un client---</option>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>

                                        <option value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['nom_famille'];?>
</option>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </select>
                                    </table>
                                    <?php } else { ?>
                                    Liste vide
                                    <?php }?>
                                </div>

                                <div class="widget-main newclient"  >

                                    <div class="form-group">

                                        <label class="control-label">Nom de famille</label>
                                        <input class="form-control" type="text" name="nom_famille" id="nom_famille"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Adresse</label>
                                        <input class="form-control" type="text" name="adresse" id="adresse"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Telephone</label>
                                        <input class="form-control" type="text" name="tel" id="tel"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Village</label>
                                        <?php if (isset($_smarty_tpl->tpl_vars['villages']->value)) {?>
                                        <select name="id_village" class="form-control" required>
                                            <option value="" disabled>---choisir un village---</option>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['villages']->value, 'village');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['village']->value) {
?>

                                            <option value="<?php echo $_smarty_tpl->tpl_vars['village']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['village']->value['nom_village'];?>
</option>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </select>
                                        </table>
                                        <?php } else { ?>
                                        Liste vide
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-box">
                            <div class="widget-header">
                                <h2 class="widget-title"><p class="text-primary">Informations d'abonnement</p></h2>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="form-group">
                                        <label class="control-label">Date abonnement</label>
                                        <input class="form-control" type="date" name="date_abonnement" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"/>
                                    </div>




                                    <div class="form-group">
                                        <label class="control-label">Description abonnement</label>
                                        <textarea class="form-control" type="text" name="description_abonnement" id="description_abonnement"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <?php if (isset($_smarty_tpl->tpl_vars['compteurs']->value)) {?>


                                        <div style="display: none;">

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compteurs']->value, 'compteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compteur']->value) {
?> <?php echo $_smarty_tpl->tpl_vars['i']->value++;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                            </div>

                                            <input type="hidden" name="id_compteur" readonly value="<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
">

                                        </table>

                                        <?php } else { ?>
                                        Liste vide
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="ENvoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>

				</div>
			</div>
		</div>
        </form>
	</body>
</html><?php }
}
