<?php /* Smarty version Smarty-3.1.14, created on 2016-10-18 18:20:18
         compiled from ".\templates\cabanias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142515805a8c22536b0-54076063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b742f9443fd2eb7cfb3cd64aa8c2d5e46bcf75' => 
    array (
      0 => '.\\templates\\cabanias.tpl',
      1 => 1476807420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142515805a8c22536b0-54076063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5805a8c22a1185_13854123',
  'variables' => 
  array (
    'admin' => 0,
    'categorias' => 0,
    'categoria' => 0,
    'cabanias' => 0,
    'cabania' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805a8c22a1185_13854123')) {function content_5805a8c22a1185_13854123($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\proyectos\\TPWeb2\\TPWeb\\libs\\plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['admin']->value)&&$_smarty_tpl->tpl_vars['admin']->value){?>
<div class="coteiner panel">
  <h1>Crear nueva cabaña</h1>
  <form class="conteiner panel ajaxForm" href="index.php?action=crearCabania" method="post" enctype="multipart/form-data">
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
      <div class="form-group col-xs-2">Categoria:
        <select class="form-control"  name="categoria">
          <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['estrella'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value["estrella"];?>
</option>
          <?php } ?>
      </select>
      <button class="btn btn-success nav-link" href="editorCategorias" type="button">Editar Categorias</button>
      </div>
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
    <a class="nav-link-cabania" href="cabania" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
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
    <div class="panel">
      <button class="btn btn-primary nav-link-cabania" href="editarDispCabania" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
" type="button">Cambiar Disponibilidad</button>
      <button class="btn btn-success nav-link-cabania" href="editorDeCabania" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
" type="button">Editar Cabaña</button>
      <button class="btn btn-danger nav-link-cabania btnEliminarCab" href="borrarCabania" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
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