<?php /* Smarty version Smarty-3.1.14, created on 2016-10-18 18:20:34
         compiled from ".\templates\cabaniaEdicion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1623258064bd213e153-46979701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2826ab2f7cdbbcdfa48d755938a837fdddd2c4a' => 
    array (
      0 => '.\\templates\\cabaniaEdicion.tpl',
      1 => 1476807484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1623258064bd213e153-46979701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cabania' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58064bd2270f42_37292331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58064bd2270f42_37292331')) {function content_58064bd2270f42_37292331($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\proyectos\\TPWeb2\\TPWeb\\libs\\plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['cabania']->value)){?>
<div class="panel">
  <p>
    <a href="index.php?action=cabania&id=<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
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


<div class="panel">

  <form class="ajaxForm" href="index.php?action=editarCabania" method="post">
    <div class="row">
    <div class="form-group col-xs-4">
      <input class="form-control" type="text" name="nombreEdit" value="<?php echo $_smarty_tpl->tpl_vars['cabania']->value["nombre"];?>
">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-xs-10">
      <textarea class="form-control" name="descripcionEdit" rows="4"><?php echo $_smarty_tpl->tpl_vars['cabania']->value["comentarios"];?>
</textarea>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-xs-2">
      <label>Nueva categoria</label>
      <select class="form-control" name="categoriaEdit">
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
    </div>
  </div>
  <div class="form-group">
    <input type="hidden" name="data-idcabania" value=<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
>
    <button class="btn btn-primary" type="submit" name="button">Enviar</button>
  </div>
</form>
</div>
</div>
<?php }?>
<?php }} ?>