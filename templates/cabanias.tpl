{if isset($cabanias)}

    {foreach from=$cabanias item=cabania}

    <div class="">
      {foreach from=$cabania['imagenes'] key=index item=imagen}
        <img src="{$imagen['path']}" class="img-thumbnail">
      {/foreach}
    </div>
    <div class="panel">
        <p>
          Cabaña {$cabania["nombre"]}, pertenece a la categoria {$cabania["id_categoria"]} estrella/as.
        </p>
        <p>
          {$cabania["comentarios"]|truncate:15}
          <a href="index.php?action=cabania&id={$cabania['id_cabania']}">Ver mas </a>
        </p>
        {if  $admin}
        <a class="eliminarCabania"  data-idcabania="{$cabania['id_cabania']}">Eliminar</a>
        <a class="editarCabania"  data-idcabania="{$cabania['id_cabania']}">Editar</a>
        {/if}
        {if $cabania["ocupada"]}
          <h3  class="col-md-offset-5">
             Ocupada
           </h3>
          {else}
          <h3 class="col-md-offset-5">
            Desocupada
          </h3>
        {/if}
    </div>


    {/foreach}

{/if}
{if  $admin}
<div class="coteiner panel">
<h1>Agregar cabaña</h1>
<form class="coteiner panel" id="formCabania" method="post" enctype="multipart/form-data">
  <input type="text" name="nombre" value="" placeholder="Nombre de la cabaña">
  <input type="text" name="descripcion" value="" placeholder="Descripcion de la cabaña">
  <input type="file" name="imagenes[]" required value="" multiple>
    Categoria:
  <select name="categoria">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
  <button type="submit" name="button">Enviar</button>
</form>
<div id="cabaniaCreadaMensaje"></div>
</div>
{/if}
