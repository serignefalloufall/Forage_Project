<?php
/* Smarty version 3.1.30, created on 2018-07-16 09:57:42
  from "C:\xampp\htdocs\forage\view\Reglement\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4c4ff69db265_89243482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6728210b7a4d955b2a79099f8a9f4b10879cd519' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\Reglement\\add.html',
      1 => 1531722146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4c4ff69db265_89243482 (Smarty_Internal_Template $_smarty_tpl) {
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
public/js/jquery.form-validator.min.js"><?php echo '</script'; ?>
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
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/add">

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-9" ><h4>Gestion Reglement</h4></div>
                    <div class="col-sm-3" >
                        <input class="form-control" type="date" required name="date_payement" id="date_payement" style="border:none;" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"/>
                    </div>
                </div>

            </div>
            <div class="panel-body">
                <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
                <div class="alert alert-success">Données ajoutées!</div>
                <?php } else { ?>
                <div class="alert alert-danger">Erreur!</div>
                <?php }?>
                <?php }?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><label class="control-label">Numero facture</label></th>
                            <th></th>
                            <th ><label class="control-label">Montant</label></th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="numero_facture" id="num_facture" required/>
                                </div>
                            </td>
                            <td></td>

                            <td colspan="2">
                                <div class="form-group">

                                    <input class="form-control" data-validation="length alphanumeric" type="text" name="montant" id="montant"  data-validation-length="min1" readonly/>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <td></td>

                            <td>
                                <label class="control-label">Somme versée</label>
                            </td>

                            <td >
                                <div class="form-group">

                                    <input class="form-control" type="text" name="somme_verse" id="somme_verse"/>
                                </div>
                            </td>

                        </tr>
                        <tr>

                            <td></td>
                            <td> <label class="control-label">Reste à rembourser</label></td>

                            <td >
                                <div class="form-group">

                                    <input class="form-control" type="text" name="reste" id="reste" readonly/>
                                </div>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>


                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="valider" value="ENvoyer"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
            </div>
        </div>
    </form>


    <?php echo '<script'; ?>
>
        $.validate({
            lang: 'es'
        });
    <?php echo '</script'; ?>
>
</div>

<?php echo '<script'; ?>
>
    //alert("yess");
    $(document).ready(function(){

        $("#num_facture").change(function(){
            // $("#num_facture").css("backgroundColor","yellow");
            var num_fact = $("#num_facture").val();


            var urll='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Service/showfact';

            // alert(urll);

            $.ajax({
                url:urll,
                type:'POST',
                //   data:'numfact='+num_fact,
                //data:'action=numfact&id='+num_fact,
                data:'action=numfact&id='+num_fact,
                success: function(reponse){

                    $("#montant").val(reponse);
                    // $("#montant").val(value);


                    /*$.each(json, function(index, value){
                     //$client.append("<option value='"+index+"'>"+value+"</option>");

                     if(index=="prix_ttc")
                     $("#montant").val(value);
                     });*/


                }
            });
        });

        $("#somme_verse").keyup(function(){
            // $("#num_facture").css("backgroundColor","yellow");
            var somme = $("#somme_verse").val();
            var nontant = $("#montant").val();
            var rest = somme-nontant;
            // $("#reste").val(nontant);
            $("#reste").val(rest);

        });
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
