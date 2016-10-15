<?php /* Smarty version Smarty-3.1.14, created on 2016-10-15 23:07:35
         compiled from ".\templates\cabanias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55465800f66515e781-62245406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b742f9443fd2eb7cfb3cd64aa8c2d5e46bcf75' => 
    array (
      0 => '.\\templates\\cabanias.tpl',
      1 => 1476565645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55465800f66515e781-62245406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5800f6651c4217_23823527',
  'variables' => 
  array (
    'admin' => 0,
    'cabanias' => 0,
    'cabania' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800f6651c4217_23823527')) {function content_5800f6651c4217_23823527($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\projects\\TPWeb\\libs\\plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['admin']->value)&&$_smarty_tpl->tpl_vars['admin']->value){?>
<div class="coteiner panel">
  <h1>Crear nueva cabaña</h1>
  <form class="conteiner panel" id="formCabania" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="form-group col-xs-6"><input class="form-control" type="text" name="nombre" value="" placeholder="Nombre de la cabaña"></div>
    </div>
    <div class="row">
      <div class="form-group col-xs-8"><textarea class="form-control" type="text" name="descripcion" value="" placeholder="Descripcion de la cabaña" rows="4"></textarea></div>
    </div>
    <div class="row">
      <div class="form-group col-xs-4"> <input class="form-control" type="file" name="imagenes[]" required value="" multiple></div>
    </div>
    <div class="row">
      <div class="form-group col-xs-2">Categoria:<select class="form-control"  name="categoria">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></div>
    </div>
    <div class="form-group"><button class="btn btn-primary" type="submit" name="button">Enviar</button></div>
  </form>
</div>
<div id="cabaniaCreadaMensaje"></div>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['cabanias']->value)){?>
<?php  $_smarty_tpl->tpl_vars['cabania'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cabania']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabanias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cabania']->key => $_smarty_tpl->tpl_vars['cabania']->value){
$_smarty_tpl->tpl_vars['cabania']->_loop = true;
?>
<div class="panel">
  <p>
    <a class="tituloCabania" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
"><h3>Cabaña <?php echo $_smarty_tpl->tpl_vars['cabania']->value["nombre"];?>
</h3></a>
    <div class="panel">
      <p>
        Pertenece a la categoria <?php echo $_smarty_tpl->tpl_vars['cabania']->value["id_categoria"];?>
 estrella/as.
      </p>
    </p>
    <p>
      <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cabania']->value["comentarios"],15);?>

    </p>
  </div>
  <?php if (isset($_smarty_tpl->tpl_vars['admin']->value)&&$_smarty_tpl->tpl_vars['admin']->value){?>
  <div class="conteiner panel">
      Disponibilidad de la cabaña:
      <button class="disponiblidadCabania btn btn-primary"  data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
" type="button">Cambiar</button>
    </div>
    <div class="panel">
      <button class="editarCabania btn btn-success"  data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
" type="button">Editar Cabaña</button>
      <button class="eliminarCabania btn btn-danger"  data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
">ELIMINAR CABAÑA</button>
    </div>
  <?php }?>

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