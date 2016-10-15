<?php /* Smarty version Smarty-3.1.14, created on 2016-10-15 22:21:54
         compiled from ".\templates\cabaniaEdicion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25274580246e5ad2b08-93884310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2826ab2f7cdbbcdfa48d755938a837fdddd2c4a' => 
    array (
      0 => '.\\templates\\cabaniaEdicion.tpl',
      1 => 1476562907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25274580246e5ad2b08-93884310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580246e5b44e69_20181254',
  'variables' => 
  array (
    'cabania' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580246e5b44e69_20181254')) {function content_580246e5b44e69_20181254($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\projects\\TPWeb\\libs\\plugins\\modifier.truncate.php';
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

  <form id="formCabaniaEdit" method="post">
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
        <option disabled value="-1">Elegir</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
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