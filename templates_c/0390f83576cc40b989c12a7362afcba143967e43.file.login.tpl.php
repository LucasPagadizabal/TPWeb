<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 18:22:45
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221145835d06525bc95-16631700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1479901420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221145835d06525bc95-16631700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msj' => 0,
    'tipoMsj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5835d06530fac1_59670337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835d06530fac1_59670337')) {function content_5835d06530fac1_59670337($_smarty_tpl) {?>
<!-- <div class="panel"> -->
  <div class="conteiner panel">
    <div class="row">

  <form class="form-signin ajaxForm" href="index.php?action=login" method="post">

      <div class="form-group col-xs-4">

      <input class="form-control" type="email" name="email" value="" placeholder="Email">
    </div>
      <div class="form-group col-xs-4">

      <input class="form-control" type="password" name="pass" value="" placeholder="Contraseña">
    </div>
    <div class="form-group col-xs-2">

      <button class="btn btn-lg btn-primary" type="submit" name="button">Log In</button>
    </div>
  </form>

</div>
</div>
<!-- </div> -->

<?php if ($_smarty_tpl->tpl_vars['msj']->value!=''){?>
  <?php if ($_smarty_tpl->tpl_vars['tipoMsj']->value=='ok'){?>
  <div class="panel alerta-success">
    <?php echo $_smarty_tpl->tpl_vars['msj']->value;?>

  </div>
  <?php }else{ ?>
  <div class="panel alerta-danger">
    <?php echo $_smarty_tpl->tpl_vars['msj']->value;?>

  </div>
  <?php }?>
  <?php }?>
  <div class="conteiner panel">

    <div class="row">
      <form class="form-signin ajaxForm" href="index.php?action=crearUsuario" method="post">
        <div class="form-group col-xs-4">

        <input class="form-control" type="email" name="user" value="" placeholder="E-mail">
      </div>
      <div class="form-group col-xs-4">

        <input class="form-control" type="password" name="pass" value="" placeholder="Contraseña">
      </div>
      <div class="form-group col-xs-2">

        <button class="btn btn-lg btn-primary" type="submit" name="button">Crear Usuario</button>
      </div>
      </form>


    </div>
</div>
<?php }} ?>