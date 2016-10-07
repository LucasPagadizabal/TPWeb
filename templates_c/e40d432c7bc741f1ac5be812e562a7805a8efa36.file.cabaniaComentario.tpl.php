<?php /* Smarty version Smarty-3.1.14, created on 2016-10-07 18:50:01
         compiled from ".\templates\cabaniaComentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1403457f7d239c56e63-05142228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40d432c7bc741f1ac5be812e562a7805a8efa36' => 
    array (
      0 => '.\\templates\\cabaniaComentario.tpl',
      1 => 1475847129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1403457f7d239c56e63-05142228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cabania' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f7d239d73121_67909363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f7d239d73121_67909363')) {function content_57f7d239d73121_67909363($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="panel">
  <h1>Cabaña <?php echo $_smarty_tpl->tpl_vars['cabania']->value["nombre"];?>
 <span id="cantidadEstrellas"><?php echo $_smarty_tpl->tpl_vars['cabania']->value["id_categoria"];?>
</span> </h1>
    <p class="panel">
      <?php echo $_smarty_tpl->tpl_vars['cabania']->value["comentarios"];?>

    </p>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>