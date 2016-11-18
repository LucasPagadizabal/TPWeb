<div class="panel">
  <h1>Cabaña {$cabania["nombre"]} <span id="cantidadEstrellas">{$cabania["estrella"]}</span> </h1>
  <p class="conteiner panel texto">
    {$cabania["comentarios"]}
  </p>
  <div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        {foreach $cabania['imagenes'] as $imagen}
        {if $imagen@index eq 0}
        <li data-target="#myCarousel" data-slide-to="{$imagen@index}" class="active"></li>
          {if $privilegio}
            <a class="eliminarImagen" id-imagen="{$imagen['id_imagen']}" href="eliminarImagen">Eliminar Imagen</a>
          {/if}
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
  <div class="panel">
    <h2>Comentarios</h2>
      <div class="container panel" id="div-com">

      </div>
    {if $sesion}
    <form class="form-inline crearComentario" href="api/comentarios" method="post">
      <select class="puntaje-api" name="puntaje">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <input class="privilegio" type="hidden" name="privilegio" value="{$privilegio}">
      <input maxlength=60 class="text-api" type="text" name="texto" placeholder="Comentario...">
      <input class="id_cabania-api" type="hidden" name="id_cabania" value="{$cabania['id_cabania']}">
      <button class="" type="submit" name="button">Comentar</button>
    </form>
  </div>
{/if}
<script src="js/estrellas.js" charset="utf-8"></script>
