<?php /* Smarty version Smarty-3.1.14, created on 2016-11-11 16:21:39
         compiled from ".\templates\cabanias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1992958240320387036-00975185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b742f9443fd2eb7cfb3cd64aa8c2d5e46bcf75' => 
    array (
      0 => '.\\templates\\cabanias.tpl',
      1 => 1478877696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1992958240320387036-00975185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58240320461fb5_95445970',
  'variables' => 
  array (
    'cabanias' => 0,
    'sesion' => 0,
    'cabania' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58240320461fb5_95445970')) {function content_58240320461fb5_95445970($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\proyectos\\TPWeb2\\TPWeb\\libs\\plugins\\modifier.truncate.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['cabanias']->value)){?>

<?php if (!$_smarty_tpl->tpl_vars['sesion']->value){?>
<div class="conteiner">
  <a class="nav-link" href="mostrarLogin">Log in</a>
</div>
<?php }else{ ?>
<div class="conteiner">
  <a class="nav-link" href="cerrarSesion">Cerrar Sesion</a>
</div>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['cabania'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabania']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabanias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabania']->key => $_smarty_tpl->tpl_vars['cabania']->value){
$_smarty_tpl->tpl_vars['cabania']->_loop = true;
?>
<div class="panel ">
  <p>
    <a class="comentarios" href="cabania" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
"><h3>Cabaña <?php echo $_smarty_tpl->tpl_vars['cabania']->value["nombre"];?>
</h3></a>
    <div class="panel">
      <p>
        Pertenece a la categoria <?php echo $_smarty_tpl->tpl_vars['cabania']->value["categoria"];?>
 estrella/as.
      </p>
    </p>
    <p>
      <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cabania']->value["comentarios"],15);?>

    </p>
  </div>

  <div class="cabaniaDisponibilidad">
    <?php if ($_smarty_tpl->tpl_vars['cabania']->value["ocupada"]){?>
    <div class="panel alerta-danger">
      <h4 >NO DISPONIBLE</h4>
    </div>
    <?php }else{ ?>
    <div class="panel alerta-success">
      <h4 class="alert-success">DISPONIBLE</h4>
    </div>
    <?php }?>
  </div>
</div>


<?php } ?>

<?php }?>
<?php }} ?>