<?php /* Smarty version Smarty-3.1.14, created on 2016-10-18 06:47:07
         compiled from ".\templates\cabaniaComentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60865805a94b1362f4-05944057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40d432c7bc741f1ac5be812e562a7805a8efa36' => 
    array (
      0 => '.\\templates\\cabaniaComentario.tpl',
      1 => 1476756839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60865805a94b1362f4-05944057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cabania' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5805a94b1dbdb5_78414779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805a94b1dbdb5_78414779')) {function content_5805a94b1dbdb5_78414779($_smarty_tpl) {?><div class="panel">
  <h1>Cabaña <?php echo $_smarty_tpl->tpl_vars['cabania']->value["nombre"];?>
 <span id="cantidadEstrellas"><?php echo $_smarty_tpl->tpl_vars['cabania']->value["id_categoria"];?>
</span> </h1>
  <p class="conteiner panel texto">
    <?php echo $_smarty_tpl->tpl_vars['cabania']->value["comentarios"];?>

  </p>
  <div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabania']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['imagen']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['imagen']->index++;
?>
        <?php if ($_smarty_tpl->tpl_vars['imagen']->index==0){?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['imagen']->index;?>
" class="active"></li>
        <?php }else{ ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['imagen']->index;?>
"></li>
        <?php }?>
        <?php } ?>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabania']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['imagen']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['imagen']->index++;
?>
        <?php if ($_smarty_tpl->tpl_vars['imagen']->index==0){?>
        <div class="item active">
          <img class="carrusel" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="Chania" >
        </div>
        <?php }else{ ?>
        <div class="item">
          <img class="carrusel" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="Chania">
        </div>
        <?php }?>
        <?php } ?>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</div>
<script src="js/estrellas.js" charset="utf-8"></script>
<?php }} ?>