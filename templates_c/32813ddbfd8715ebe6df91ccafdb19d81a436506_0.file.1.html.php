<?php
/* Smarty version 3.1.30, created on 2018-07-09 08:49:44
  from "C:\xampp\htdocs\forage\view\accueil\1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b430588a18df3_93780739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32813ddbfd8715ebe6df91ccafdb19d81a436506' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\accueil\\1.html',
      1 => 1531118981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b430588a18df3_93780739 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/mycss.css"/>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/myjs.js"><?php echo '</script'; ?>
>

</head>
<body>

<h2>Bootstrap Panels as Widgets</h2>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Panel Widget Primary
                    <div class="pull-right">
                        <a href="#" data-perform="panel-dismiss" class="btn btn-primary btn-xs pull-right"><i class="fa fa-times"></i></a>
                        <a href="#" data-perform="panel-collapse" class="btn btn-primary btn-xs pull-right"><i class="fa fa-minus"></i></a>
                    </div>
                </h4>
            </div>

            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Panel Widget Success
                    <div class="pull-right">
                        <a href="#" data-perform="panel-dismiss" class="btn btn-success btn-xs pull-right"><i class="fa fa-times"></i></a>
                        <a href="#" data-perform="panel-collapse" class="btn btn-success btn-xs pull-right"><i class="fa fa-minus"></i></a>
                    </div>
                </h4>
            </div>

            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur mollit anim id adipisicing elit.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Panel Widget Danger
                    <div class="pull-right">
                        <a href="#" data-perform="panel-dismiss" class="btn btn-danger btn-xs pull-right"><i class="fa fa-times"></i></a>
                        <a href="#" data-perform="panel-collapse" class="btn btn-danger btn-xs pull-right"><i class="fa fa-minus"></i></a>
                    </div>
                </h4>
            </div>

            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem fugiat nulla pariatur mollit anim id.
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Panel Widget Info
                    <div class="pull-right">
                        <a href="#" data-perform="panel-dismiss" class="btn btn-info btn-xs pull-right"><i class="fa fa-times"></i></a>
                        <a href="#" data-perform="panel-collapse" class="btn btn-info btn-xs pull-right"><i class="fa fa-minus"></i></a>
                    </div>
                </h4>
            </div>

            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat perspiciatis unde omnis iste natus error.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Collapsed Panel Widget Warning
                    <div class="pull-right">
                        <a href="#" data-perform="panel-dismiss" class="btn btn-warning btn-xs pull-right"><i class="fa fa-times"></i></a>
                        <a href="#" data-perform="panel-collapse" class="btn btn-warning btn-xs pull-right"><i class="fa fa-plus"></i></a>
                    </div>
                </h4>
            </div>

            <div class="panel-wrapper collapse">
                <div class="panel-body">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Collapsed Panel Widget Danger
                    <div class="pull-right">
                        <a href="#" data-perform="panel-dismiss" class="btn btn-inverse btn-xs pull-right"><i class="fa fa-times"></i></a>
                        <a href="#" data-perform="panel-collapse"  class="btn btn-inverse btn-xs pull-right"><i class="fa fa-plus"></i></a>
                    </div>
                </h4>
            </div>

            <div class="panel-wrapper collapse">
                <div class="panel-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html><?php }
}
