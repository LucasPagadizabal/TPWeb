<?php /* Smarty version Smarty-3.1.14, created on 2016-11-10 06:23:36
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5266582404587a5a29-28477100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1478747756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5266582404587a5a29-28477100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58240458875b99_80791458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58240458875b99_80791458')) {function content_58240458875b99_80791458($_smarty_tpl) {?><div class="panel">
  <div class="panel">
    <h3>Log In</h3>
  <form class="ajaxForm" href="index.php?action=login" method="post">
    <div class="form-group">
      <input type="text" name="email" value="" placeholder="Email">
      <input type="text" name="pass" value="" placeholder="Contraseña">
      <button type="submit" name="button">Log In</button>
    </div>
  </form>
  </div>
    <div class="panel">
      <h3>crear cuenta</h3>
      <form class="ajaxForm" href="index.php?action=crearUsuario" method="post">
        <input type="text" name="user" value="" placeholder="E-mail">
        <input type="text" name="pass" value="" placeholder="Contraseña">
        <button type="submit" name="button">enviar</button>
      </form>

      <div class="panel">
        <?php echo $_smarty_tpl->tpl_vars['msj']->value;?>

      </div>
    </div>



</div>
<?php }} ?>