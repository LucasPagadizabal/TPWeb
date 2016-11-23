<div class="panel">
  <h1>Cabaña {$cabania["nombre"]} <span id="cantidadEstrellas">{$cabania["estrella"]}</span> </h1>
  <p class="conteiner panel texto">
    {$cabania["comentarios"]}
  </p>
  <div class="container">
    <input id="inputPrivilegio" type="hidden" name="name" value="{$privilegio}">
    <br>
    <div id="myCarousel" class="carousel slide" data-privilegio="{$privilegio}" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        {foreach $cabania['imagenes'] as $imagen}
        {if $imagen@index eq 0}
        <li data-target="#myCarousel" data-slide-to="{$imagen@index}" class="active"></li>
        {else}
        <li data-target="#myCarousel" data-slide-to="{$imagen@index}"></li>

        {/if}
        {/foreach}
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        {foreach $cabania['imagenes'] as $imagen}
        {if $imagen@index eq 0}
        <div class="item active">
          <img class="carrusel" src="{$imagen['path']}" alt="Chania" >
        </div>
        {else}
        <div class="item">
          <img class="carrusel" src="{$imagen['path']}" alt="Chania">
        </div>
        {/if}
        {/foreach}
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
  {if $privilegio == 1}
  <div class="panel">

  {foreach $cabania['imagenes'] as $imagen}

  <div class="panel texto">

  <img class="imgDelete" src="{$imagen['path']}" alt="" />
    <!-- <div class="form-group"> -->
        <button class="eliminarImagen btn btn-danger btnEliminarCab" id-imagen="{$imagen['id_imagen']}" id-cabania= "{$cabania['id_cabania']}" href="eliminarImagen">Eliminar</button>

  <!-- </div> -->
  </div>
  {/foreach}
</div>
<div class="panel">
  <p>Agregar nuevas imagenes a esta cabaña</p>
  <form class="conteiner panel ajaxForm" href="index.php?action=agregarImgCabExistente" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_cab" value="{$cabania['id_cabania']}">
    <div class="row">

      <div class="form-group col-xs-4"> <input class="form-control" type="file" name="imagenes[]" required value="" multiple></div>
    </div>
    <div class="form-group"><button class="btn btn-primary" type="submit" name="button">Enviar</button></div>
  </form>
</div>
  {/if}
  <div class="panel">
    <h2>Comentarios</h2>
    <div class="container panel" id="div-com">

    </div>
    {if $sesion}
    <div class="panel">

      <form class="crearComentario" href="api/comentarios" method="post">
        <input class="privilegio" type="hidden" name="privilegio" value="{$privilegio}">
        <input class="id_cabania-api" type="hidden" name="id_cabania" value="{$cabania['id_cabania']}">
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
    {/if}
  </div>
  <script src="js/estrellas.js" charset="utf-8"></script>
