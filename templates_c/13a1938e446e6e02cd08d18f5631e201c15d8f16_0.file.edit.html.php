<?php
/* Smarty version 3.1.30, created on 2018-07-16 09:52:45
  from "C:\xampp\htdocs\forage\view\village\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4c4ecda27ce2_17585866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13a1938e446e6e02cd08d18f5631e201c15d8f16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\village\\edit.html',
      1 => 1531727555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4c4ecda27ce2_17585866 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li class="dropdown active">
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
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/update">
						<div class="form-group">
							<label class="control-label">ID du Village</label>
							<input class="form-control" type="text" name="id" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['village']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['village']->value['id'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom village</label>
							<input class="form-control" type="text" name="nom_village" id="nom_village" value="<?php if (isset($_smarty_tpl->tpl_vars['village']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['village']->value['nom_village'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Nom chef village</label>
							<input class="form-control" type="text" name="nom_chef_village" id="nom_chef_village" value="<?php if (isset($_smarty_tpl->tpl_vars['village']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['village']->value['nom_chef_village'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
