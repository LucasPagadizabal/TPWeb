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
{if $sesion == 1}
  <div class="panel">
    <h2>Comentarios</h2>
    <div class="comentarios">

    </div>
    <div class="">

    </div>
  </div>
{/if}
<script src="js/estrellas.js" charset="utf-8"></script>
<script src="js/apiComentario.js">

</script>
