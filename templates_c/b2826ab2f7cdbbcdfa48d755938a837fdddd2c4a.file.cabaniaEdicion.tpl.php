<?php /* Smarty version Smarty-3.1.14, created on 2016-11-11 03:04:02
         compiled from ".\templates\cabaniaEdicion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196495825271232dcf2-16718636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2826ab2f7cdbbcdfa48d755938a837fdddd2c4a' => 
    array (
      0 => '.\\templates\\cabaniaEdicion.tpl',
      1 => 1478782719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196495825271232dcf2-16718636',
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
  'unifunc' => 'content_58252712610586_27989645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58252712610586_27989645')) {function content_58252712610586_27989645($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\proyectos\\TPWeb2\\TPWeb\\libs\\plugins\\modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['cabania']->value)){?>
<div class="panel">
  <p>
    <a class="nav-link-cabania" href="cabania" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
"><h3>Cabaña <?php echo $_smarty_tpl->tpl_vars['cabania']->value["nombre"];?>
</h3></a>
    <div class="panel">
      <p>
        Pertenece a la categoria <?php echo $_smarty_tpl->tpl_vars['cabania']->value["estrella"];?>
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