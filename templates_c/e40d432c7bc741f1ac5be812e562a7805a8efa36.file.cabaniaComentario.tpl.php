<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 18:22:59
         compiled from ".\templates\cabaniaComentario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214915835d073abb5a8-28770092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40d432c7bc741f1ac5be812e562a7805a8efa36' => 
    array (
      0 => '.\\templates\\cabaniaComentario.tpl',
      1 => 1479901420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214915835d073abb5a8-28770092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cabania' => 0,
    'privilegio' => 0,
    'imagen' => 0,
    'sesion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5835d073c10303_91842932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835d073c10303_91842932')) {function content_5835d073c10303_91842932($_smarty_tpl) {?><div class="panel">
  <h1>Cabaña <?php echo $_smarty_tpl->tpl_vars['cabania']->value["nombre"];?>
 <span id="cantidadEstrellas"><?php echo $_smarty_tpl->tpl_vars['cabania']->value["estrella"];?>
</span> </h1>
  <p class="conteiner panel texto">
    <?php echo $_smarty_tpl->tpl_vars['cabania']->value["comentarios"];?>

  </p>
  <div class="container">
    <input id="inputPrivilegio" type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['privilegio']->value;?>
">
    <br>
    <div id="myCarousel" class="carousel slide" data-privilegio="<?php echo $_smarty_tpl->tpl_vars['privilegio']->value;?>
" data-ride="carousel">
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
  <?php if ($_smarty_tpl->tpl_vars['privilegio']->value==1){?>
  <div class="panel">

  <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabania']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['imagen']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['imagen']->index++;
?>

  <div class="panel texto">

  <img class="imgDelete" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="" />
    <!-- <div class="form-group"> -->
        <button class="eliminarImagen btn btn-danger btnEliminarCab" id-imagen="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
" id-cabania= "<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
" href="eliminarImagen">Eliminar</button>

  <!-- </div> -->
  </div>
  <?php } ?>
</div>
<div class="panel">
  <p>Agregar nuevas imagenes a esta cabaña</p>
  <form class="conteiner panel ajaxForm" data-idcabania="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
" href="index.php?action=agregarImgCabExistente" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_cab" value="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
">
    <div class="row">

      <div class="form-group col-xs-4"> <input class="form-control" type="file" name="imagenes[]" required value="" multiple></div>
    </div>
    <div class="form-group"><button class="btn btn-primary" type="submit" name="button">Enviar</button></div>
  </form>
</div>
  <?php }?>
  <div class="panel">
    <h2>Comentarios</h2>
    <div class="container panel" id="div-com">

    </div>
    <?php if ($_smarty_tpl->tpl_vars['sesion']->value){?>
    <div class="panel">

      <form class="crearComentario" href="api/comentarios" method="post">
        <input class="privilegio" type="hidden" name="privilegio" value="<?php echo $_smarty_tpl->tpl_vars['privilegio']->value;?>
">
        <input class="id_cabania-api" type="hidden" name="id_cabania" value="<?php echo $_smarty_tpl->tpl_vars['cabania']->value['id_cabania'];?>
">
        <div class="row">
          <div class="form-group col-xs-4">
            <input maxlength=60 class="text-api form-control" type="text" name="texto" placeholder="Deje aqui su comentario...">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-1">
            <label>Puntaje</label>

            <select class="puntaje-api form-control" name="puntaje">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>

          </div>
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit" name="button">Enviar</button>
        </div>
      </form>
    </div>
    <?php }?>
  </div>
  <script src="js/estrellas.js" charset="utf-8"></script>
<?php }} ?>