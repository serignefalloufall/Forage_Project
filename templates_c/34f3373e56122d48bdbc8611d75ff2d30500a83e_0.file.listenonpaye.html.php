<?php
/* Smarty version 3.1.30, created on 2018-09-01 06:26:24
  from "C:\xampp\htdocs\forage\view\facture\listenonpaye.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b8a14f07e8720_96773205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34f3373e56122d48bdbc8611d75ff2d30500a83e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\facture\\listenonpaye.html',
      1 => 1531777045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8a14f07e8720_96773205 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>page liste</title>
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
        <div class="panel-heading"><center><h3>LISTE DES FACTURES NON PAYE</h3></center></div>
        <div class="panel-body">
            <div class="alert alert-success" style="font-size:18px; text-align:justify;">

            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['factures']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['factures']->value != null) {?>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Identifiant</th>
                    <th>Numero facture</th>
                    <th>Date facturation</th>
                    <th>Date payement</th>
                    <th>Prix ht</th>
                    <th>TVA</th>
                    <th>prix ttc</th>
                    <th>Action</th>

                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['factures']->value, 'facture');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facture']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['facture']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['facture']->value['num_facture'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['facture']->value['date_facturation'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['facture']->value['date_payement'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['facture']->value['prix_ht'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['facture']->value['tva'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['facture']->value['prix_ttc'];?>
</td>

                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/couper/<?php echo $_smarty_tpl->tpl_vars['facture']->value['id'];?>
">Couper</a></td>
                </tr>
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
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/add">Ajout d'un facture</a>
    </div>
</div>

</body>
</html>
<?php }
}
