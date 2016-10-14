<?php /* Smarty version Smarty-3.1.14, created on 2016-10-12 20:42:51
         compiled from ".\templates\body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3092357feca7be421d9-55832961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562e1ca8427e64dd9668ae2f08a796d732ac8b21' => 
    array (
      0 => '.\\templates\\body.tpl',
      1 => 1476313578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3092357feca7be421d9-55832961',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57feca7be77855_10974599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57feca7be77855_10974599')) {function content_57feca7be77855_10974599($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="listaCabanias">
  <?php echo $_smarty_tpl->getSubTemplate ("cabanias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>