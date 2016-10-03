<?php /* Smarty version Smarty-3.1.14, created on 2016-10-03 19:49:35
         compiled from ".\templates\cabaniaComentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:431757e157fab95983-85825288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40d432c7bc741f1ac5be812e562a7805a8efa36' => 
    array (
      0 => '.\\templates\\cabaniaComentario.tpl',
      1 => 1475516951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '431757e157fab95983-85825288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57e157fac434f7_08986459',
  'variables' => 
  array (
    'cabania' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e157fac434f7_08986459')) {function content_57e157fac434f7_08986459($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="panel texto">
  <h1>Cabaña Nroº <?php echo $_smarty_tpl->tpl_vars['cabania']->value["id_cabania"];?>
 ---- <?php echo $_smarty_tpl->tpl_vars['cabania']->value["categoria"];?>
 Estrellas </h1>

    <p class="panel">
      <?php echo $_smarty_tpl->tpl_vars['cabania']->value["comentarios"];?>

    </p>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>