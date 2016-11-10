<?php /* Smarty version Smarty-3.1.14, created on 2016-11-09 22:06:43
         compiled from ".\templates\body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21682580ba070e35e80-54982366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562e1ca8427e64dd9668ae2f08a796d732ac8b21' => 
    array (
      0 => '.\\templates\\body.tpl',
      1 => 1477575823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21682580ba070e35e80-54982366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580ba07102c808_22477115',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580ba07102c808_22477115')) {function content_580ba07102c808_22477115($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="listaCabanias">
 <?php echo $_smarty_tpl->getSubTemplate ("cabanias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>