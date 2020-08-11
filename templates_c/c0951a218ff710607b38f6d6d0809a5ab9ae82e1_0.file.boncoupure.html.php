<?php
/* Smarty version 3.1.30, created on 2018-09-01 06:49:05
  from "C:\xampp\htdocs\forage\view\Facture\boncoupure.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b8a1a41b67023_15773672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0951a218ff710607b38f6d6d0809a5ab9ae82e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\Facture\\boncoupure.html',
      1 => 1535777343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8a1a41b67023_15773672 (Smarty_Internal_Template $_smarty_tpl) {
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

            img {
                border-radius: 100%;
                width: 200px;
                height: 200px;

            }
			h3{
				color: #00a8ff;
                font-family: "Times New Roman", Times, serif;
			}
            body{
                background-color: #F5F5F5;
            }
            P{
                font-family: "Times New Roman", Times, serif;
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
			<div class="panel panel-default">
                <div class="panel-heading">

                    <h3>Bon de coupure pour le compteur numero :<?php if (isset($_smarty_tpl->tpl_vars['compteur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['compteur']->value['numero_compteur'];?>
 <?php }?></h3></div>
				<div class="panel-body">
                    <div class="alert alert-info" style="font-size:18px; text-align:justify;">
                        <p>Cher client,votre compteur a ete coupe a raison d'un facture non paye
                        Nous vous donnons rendez vous a notre agence .</p>
                        <p>Merci!!! d'avoir utilise SEN-FORAGE</p>
                   <P></P>
                        <hr>
                        <hr>
                     <p>Numero facture : <?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['num_facture'];
}?></p>
                        <p>Date limite de payement:<?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {
echo $_smarty_tpl->tpl_vars['facture']->value['date_payement'];
}?></p>
                        <p>Montant non payée: <?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {?> <?php $_smarty_tpl->_assignInScope('prixttc', ($_smarty_tpl->tpl_vars['facture']->value['prix_ttc']));
?> <?php echo $_smarty_tpl->tpl_vars['prixttc']->value;?>
 <?php }?></p>
                        <p>frais de coupure : <?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {?> <?php $_smarty_tpl->_assignInScope('penalite', ((5*$_smarty_tpl->tpl_vars['prixttc']->value)/100));
?> <?php echo $_smarty_tpl->tpl_vars['penalite']->value;
}?></p>
                        <p class="alert alert-info" ><h3>Net a payée: <?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {?> <?php $_smarty_tpl->_assignInScope('total', ($_smarty_tpl->tpl_vars['prixttc']->value+$_smarty_tpl->tpl_vars['penalite']->value));
?> <?php echo $_smarty_tpl->tpl_vars['total']->value;
}?></h3></p>
                    </div>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/updatecouper">
                        <input class="form-control" type="hidden" name="type_facture" id="type_facture" value="bon_coupure"/>
                        <input class="form-control" type="hidden" name="prix_ttc" id="prix_ttc" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
"/>
                        <input class="form-control" type="hidden" name="id_facture" id="id_facture" value="<?php if (isset($_smarty_tpl->tpl_vars['facture']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['facture']->value['id'];?>
 <?php }?>"/>
                        <input class="form-control" type="hidden" name="id_compteur" id="id_compteur" value="<?php if (isset($_smarty_tpl->tpl_vars['compteur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['compteur']->value['id'];?>
 <?php }?>"/>

                        <div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Valider"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/nonpaye">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
