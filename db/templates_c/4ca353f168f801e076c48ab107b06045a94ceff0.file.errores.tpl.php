<?php /* Smarty version Smarty-3.1.14, created on 2016-11-22 23:04:21
         compiled from ".\templates\errores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2831158251df58ee007-02822152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ca353f168f801e076c48ab107b06045a94ceff0' => 
    array (
      0 => '.\\templates\\errores.tpl',
      1 => 1479851877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2831158251df58ee007-02822152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58251df5a78813_22614022',
  'variables' => 
  array (
    'asignados' => 0,
    'db_correcto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58251df5a78813_22614022')) {function content_58251df5a78813_22614022($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['asignados']->value){?>
<div class="panel panel-filled panel-c-info">
    <div class="panel-heading">
        La conexion fue establecida correctamente.
    </div>
</div>
<?php }elseif(!$_smarty_tpl->tpl_vars['asignados']->value){?>
<div class="panel panel-filled panel-c-danger">
    <div class="panel-heading">
        Hubo un error al conectarse.
    </div>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['db_correcto']->value)){?>
<?php if ($_smarty_tpl->tpl_vars['db_correcto']->value>0){?>
<div class="panel panel-filled panel-c-info">
    <div class="panel-heading">
        Se agregaron datos a la base de datos correctamente.
    </div>
</div>
<?php }else{ ?>
<div class="panel panel-filled panel-c-danger">
    <div class="panel-heading">
        Hubo un problema al agregar los datos (<?php echo $_smarty_tpl->tpl_vars['db_correcto']->value;?>
)
    </div>
</div>
<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['asignados']->value){?><a href="../index.php" class="btn btn-w-md btn-success btn-block">Ir al inicio</a><?php }?>
<?php }} ?>