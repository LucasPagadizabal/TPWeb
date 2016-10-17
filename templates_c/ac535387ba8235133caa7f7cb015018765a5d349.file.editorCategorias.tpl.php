<?php /* Smarty version Smarty-3.1.14, created on 2016-10-18 01:11:22
         compiled from ".\templates\editorCategorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17043580549fabaa778-52408691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac535387ba8235133caa7f7cb015018765a5d349' => 
    array (
      0 => '.\\templates\\editorCategorias.tpl',
      1 => 1476745876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17043580549fabaa778-52408691',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580549fac5b569_17394369',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580549fac5b569_17394369')) {function content_580549fac5b569_17394369($_smarty_tpl) {?><div class="panel">
  <div class="col-md-offset-4">
    <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
    <form class="editarCategoria"  method="post">
      <input type="text" name="valorInput" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['estrella'];?>
">
      <input type="hidden" name="data-idcategoria" value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
>
      <button class="btn btn-success editarCategoria" type="submit" name="button">Editar</button>
      <button class="btn btn-danger eliminarCategoria" data-id-categoria="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" type="submit" name="button">Eliminar</button>
    </form>
    <?php } ?>
    <form id="formCrearCat" class="" method="post">
      <input type="text" name="valorCategoria" value="" placeholder="Categoria">
      <button class="btn btn-primary" type="submit" name="button">Crear</button>
    </form>
  </div>
</div>
<?php }} ?>