<?php /* Smarty version Smarty-3.1.14, created on 2016-10-12 20:42:51
         compiled from ".\templates\cabanias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1632157feca7beb0be0-12050437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b742f9443fd2eb7cfb3cd64aa8c2d5e46bcf75' => 
    array (
      0 => '.\\templates\\cabanias.tpl',
      1 => 1476315344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1632157feca7beb0be0-12050437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cabanias' => 0,
    'cabania' => 0,
    'imagen' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57feca7bef5685_23727334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57feca7bef5685_23727334')) {function content_57feca7bef5685_23727334($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\TPWeb2\\libs\\plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['cabanias']->value)){?>

    <?php  $_smarty_tpl->tpl_vars['cabania'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabania']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabanias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabania']->key => $_smarty_tpl->tpl_vars['cabania']->value){
$_smarty_tpl->tpl_vars['cabania']->_loop = true;
?>

    <div class="">
      <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cabania']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['imagen']->key;
?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" class="img-thumbnail">
      <?php } ?>
    </div>
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
        <?php if ($_smarty_tpl->tpl_vars['admin']->value){?>
        <a class="eliminarCabania"  data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
">Eliminar</a>
        <a class="editarCabania"  data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
">Editar</a>
        <?php }?>
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
<?php if ($_smarty_tpl->tpl_vars['admin']->value){?>
<div class="coteiner panel">
<h1>Agregar cabaña</h1>
<form class="coteiner panel" id="formCabania" method="post" enctype="multipart/form-data">
  <input type="text" name="nombre" value="" placeholder="Nombre de la cabaña">
  <input type="text" name="descripcion" value="" placeholder="Descripcion de la cabaña">
  <input type="file" name="imagenes[]" required value="" multiple>
    Categoria:
  <select name="categoria">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
  <button type="submit" name="button">Enviar</button>
</form>
<div id="cabaniaCreadaMensaje"></div>
</div>
<?php }?>
<?php }} ?>