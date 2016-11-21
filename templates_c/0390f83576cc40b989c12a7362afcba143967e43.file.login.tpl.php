<?php /* Smarty version Smarty-3.1.14, created on 2016-11-21 20:56:36
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5266582404587a5a29-28477100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1479758191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5266582404587a5a29-28477100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58240458875b99_80791458',
  'variables' => 
  array (
    'msj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58240458875b99_80791458')) {function content_58240458875b99_80791458($_smarty_tpl) {?><div class="panel">
  <div class="panel container">
  <form class="form-signin ajaxForm" href="index.php?action=login" method="post">
      <h3 class="form-signin-heading">Log In</h3>
      <input class="form-control" type="email" name="email" value="" placeholder="Email">
      <input class="form-control" type="password" name="pass" value="" placeholder="Contraseña">
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="button">Log In</button>
  </form>

</div>

<div class="panel">
  <div class="panel">
    <?php echo $_smarty_tpl->tpl_vars['msj']->value;?>

  </div>
</div>

    <div class="panel container">
      <form class="form-signin ajaxForm" href="index.php?action=crearUsuario" method="post">
        <h3 class="form-signin-heading">Crear cuenta</h3>
        <input class="form-control" type="email" name="user" value="" placeholder="E-mail">
        <input class="form-control" type="password" name="pass" value="" placeholder="Contraseña">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="button">Crear</button>
      </form>


    </div>

</div>
<?php }} ?>