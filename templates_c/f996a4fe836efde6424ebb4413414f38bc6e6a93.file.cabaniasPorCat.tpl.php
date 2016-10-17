<?php /* Smarty version Smarty-3.1.14, created on 2016-10-17 20:25:10
         compiled from ".\templates\cabaniasPorCat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54135804e55da0b588-83182157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f996a4fe836efde6424ebb4413414f38bc6e6a93' => 
    array (
      0 => '.\\templates\\cabaniasPorCat.tpl',
      1 => 1476728706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54135804e55da0b588-83182157',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5804e55db79e98_76829347',
  'variables' => 
  array (
    'lista' => 0,
    'cabanias' => 0,
    'cabania' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804e55db79e98_76829347')) {function content_5804e55db79e98_76829347($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\proyectos\\TPWeb-master\\libs\\plugins\\modifier.truncate.php';
?>  <div class="panel">
    <form id="formBuscar"  method="post">
      <div class="form-group col-xs-2">
        <select class="form-control" name="id_categoria">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <button class="btn btn-primary" type="submit" name="">Buscar</button>
    </form>
  </div>
<?php if (isset($_smarty_tpl->tpl_vars['lista']->value)&&$_smarty_tpl->tpl_vars['lista']->value){?>
  <div class="panel">
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
    <div class="panel">
      <h4><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h4>
    </div>
  </div>
  <?php }?>
<?php }} ?>