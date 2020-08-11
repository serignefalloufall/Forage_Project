<?php
/* Smarty version 3.1.30, created on 2019-06-03 05:34:48
  from "C:\xampp\htdocs\forage\view\accueil\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf49558e06cc8_52870347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9fdbe3661eb5a332d9168c4eb0945d1eb9dc8c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\accueil\\index.html',
      1 => 1558327626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf49558e06cc8_52870347 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
    <title>page d'authentification</title>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/spinners.css" />
</head>

<body>
    <div class="header">
        <h2>Formulaire d'authentification </h2>
    </div>

    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Accueil/connexion">
        <?php echo '<?php ';?>include('errors.php'); <?php echo '?>';?>
        <div class="input-group">
            <label>Login</label>
            <input type="text" name="login" placeholder="Entrez votre login">
        </div>

        <div class="input-group">
            <label>Mot de passe</label>
            <input type="password" name="password" placeholder="Entrez votre mot de passe">
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="connexion">Se connecter</button>
        </div>
        <p>pour tester taper <strong>fallfallou</strong> pour login
            <p><strong>passer</strong> pour le mot de passe
                <span class="text-danger align-middle">
                    <?php if (isset($_smarty_tpl->tpl_vars['erreur']->value)) {?>
                    <p class="text-danger">
                        <div class="alert alert-danger" style="font-size:18px; text-align:justify;">
                            <?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>

                        </div>
                    </p>
                    <?php }?>
                </span>



    </form>
</body>

</html><?php }
}
