<?php
/* Smarty version 3.1.30, created on 2018-06-13 04:57:44
  from "C:\xampp\htdocs\forage\view\facture\listenonregle.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b20882811d6d9_42237981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb9cad2faf74c2f8e7c972edc93e55369acd34b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\facture\\listenonregle.html',
      1 => 1528858629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20882811d6d9_42237981 (Smarty_Internal_Template $_smarty_tpl) {
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
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu page test</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu page test 2</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu page test liste</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">Liste  facture non regle</div>
				<div class="panel-body">
					<div class="alert alert-success" style="font-size:18px; text-align:justify;">

					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['factures']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['factures']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>Numero facture</th>
									<th>Date facturation</th>
									<th>Date payement</th>
									<th>Prix ht</th>
									<th>TVA</th>
									<th>prix ttc</th>
									<th>Action</th>
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
Facture/delete/<?php echo $_smarty_tpl->tpl_vars['facture']->value['id'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/edit/<?php echo $_smarty_tpl->tpl_vars['facture']->value['id'];?>
">Editer</a></td>
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
