<?php /* Smarty version Smarty-3.1.14, created on 2016-11-11 02:43:26
         compiled from ".\templates\editorCategorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3660582403272761d2-20813739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac535387ba8235133caa7f7cb015018765a5d349' => 
    array (
      0 => '.\\templates\\editorCategorias.tpl',
      1 => 1478782719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3660582403272761d2-20813739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5824032733d8d6_95109044',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5824032733d8d6_95109044')) {function content_5824032733d8d6_95109044($_smarty_tpl) {?><div class="panel">
  <div class="col-md-offset-4">
    <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
    <form class="ajaxForm" href="index.php?action=editarCategoria"  method="post">
      <input type="number" name="valorInput" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['estrella'];?>
">
      <input type="hidden" name="data-idcategoria" value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
>
      <button class="btn btn-success" type="submit" name="button">Editar</button>
      <button class="btn btn-danger nav-link-categoria" href="eliminarCategoria" data="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['estrella'];?>
" data-id-categoria="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" type="button" name="button">Eliminar</button>
    </form>
    <?php } ?>
    <form class="ajaxForm" href="index.php?action=crearCategoria" method="post">
      <input type="number" name="valorCategoria" value="" placeholder="Categoria">
      <button class="btn btn-primary" type="submit" name="button">Crear</button>
    </form>
  </div>
</div>
<?php }} ?>