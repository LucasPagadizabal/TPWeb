<?php /* Smarty version Smarty-3.1.14, created on 2016-10-03 19:51:42
         compiled from ".\templates\cabanias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1694157e141187da370-80623997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b742f9443fd2eb7cfb3cd64aa8c2d5e46bcf75' => 
    array (
      0 => '.\\templates\\cabanias.tpl',
      1 => 1475517081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1694157e141187da370-80623997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57e1411889c3f3_24147348',
  'variables' => 
  array (
    'cabanias' => 0,
    'cabania' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e1411889c3f3_24147348')) {function content_57e1411889c3f3_24147348($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\proyectos\\TPEWeb2\\libs\\plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['cabanias']->value)){?>

    <?php  $_smarty_tpl->tpl_vars['cabania'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabania']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabanias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabania']->key => $_smarty_tpl->tpl_vars['cabania']->value){
$_smarty_tpl->tpl_vars['cabania']->_loop = true;
?>

    <div class="panel">
        <p>
          Cabañia Nº <?php echo $_smarty_tpl->tpl_vars['cabania']->value["id_cabania"];?>
, pertenece a la categoria <?php echo $_smarty_tpl->tpl_vars['cabania']->value["categoria"];?>
 estrellas.
        </p>
        <p>
          <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cabania']->value["comentarios"],15);?>

          <a href="index.php?action=cabania&id=<?php echo $_smarty_tpl->tpl_vars['cabania']->value["id_cabania"];?>
">Ver mas </a>
        </p>
        <a class="eliminarCabania" href="" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
">Eliminar</a>
    </div>


    <?php } ?>

<?php }?>
<?php }} ?>