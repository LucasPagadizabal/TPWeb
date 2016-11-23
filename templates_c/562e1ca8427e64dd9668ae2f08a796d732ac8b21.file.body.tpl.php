<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 18:22:30
         compiled from ".\templates\body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48485835d056138984-56354567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562e1ca8427e64dd9668ae2f08a796d732ac8b21' => 
    array (
      0 => '.\\templates\\body.tpl',
      1 => 1479901420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48485835d056138984-56354567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5835d0561da478_34124400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835d0561da478_34124400')) {function content_5835d0561da478_34124400($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="listaCabanias">
 <?php echo $_smarty_tpl->getSubTemplate ("cabanias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>