<?php /* Smarty version Smarty-3.1.14, created on 2016-10-07 22:23:09
         compiled from ".\templates\cabanias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1925257f7d11a8651d5-26230494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b742f9443fd2eb7cfb3cd64aa8c2d5e46bcf75' => 
    array (
      0 => '.\\templates\\cabanias.tpl',
      1 => 1475871786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1925257f7d11a8651d5-26230494',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57f7d11a9483e2_14157362',
  'variables' => 
  array (
    'cabanias' => 0,
    'cabania' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f7d11a9483e2_14157362')) {function content_57f7d11a9483e2_14157362($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\proyectos\\TPWeb2\\TPWeb\\libs\\plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['cabanias']->value)){?>

    <?php  $_smarty_tpl->tpl_vars['cabania'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabania']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabanias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabania']->key => $_smarty_tpl->tpl_vars['cabania']->value){
$_smarty_tpl->tpl_vars['cabania']->_loop = true;
?>

    <div class="panel">
        <p>
          Cabaña <?php echo $_smarty_tpl->tpl_vars['cabania']->value["nombre"];?>
, pertenece a la categoria <?php echo $_smarty_tpl->tpl_vars['cabania']->value["id_categoria"];?>
 estrella/as.
        </p>
        <p>
          <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cabania']->value["comentarios"],15);?>

          <a href="index.php?action=cabania&id=<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
">Ver mas </a>
        </p>
        <a class="eliminarCabania" href="#" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
">Eliminar</a>
        <a class="editarCabania" href="#" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
">Editar</a>
        <?php if ($_smarty_tpl->tpl_vars['cabania']->value["ocupada"]){?>
          <h3  class="col-md-offset-5">
             Ocupada
           </h3>
          <?php }else{ ?>
          <h3 class="col-md-offset-5">
            Desocupada
          </h3>
        <?php }?>
    </div>


    <?php } ?>

<?php }?>
<?php }} ?>