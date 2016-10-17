{if isset($admin) && $admin }
<div class="coteiner panel">
  <h1>Crear nueva cabaña</h1>
  <form class="conteiner panel" id="formCabania" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="form-group col-xs-6"><input class="form-control" type="text" name="nombre" value="" placeholder="Nombre de la cabaña"></div>
    </div>
    <div class="row">
      <div class="form-group col-xs-8"><textarea class="form-control" type="text" name="descripcion" value="" placeholder="Descripcion de la cabaña" rows="4"></textarea></div>
    </div>
    <div class="row">
      <div class="form-group col-xs-4"> <input class="form-control" type="file" name="imagenes[]" required value="" multiple></div>
    </div>
    <div class="row">
      <div class="form-group col-xs-2">Categoria:
        <select class="form-control"  name="categoria">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></div>
    </div>
    <div class="form-group"><button class="btn btn-primary" type="submit" name="button">Enviar</button></div>
  </form>
</div>
<div id="cabaniaCreadaMensaje"></div>
</div>
{/if}

{if isset($cabanias)}
{foreach from=$cabanias item=cabania}
<div class="panel">
  <p>
    <a class="tituloCabania" data-idcabania="{$cabania['id_cabania']}"><h3>Cabaña {$cabania["nombre"]}</h3></a>
    <div class="panel">
      <p>
        Pertenece a la categoria {$cabania["id_categoria"]} estrella/as.
      </p>
    </p>
    <p>
      {$cabania["comentarios"]|truncate:15}
    </p>
  </div>
  {if isset($admin) && $admin }
  <div class="conteiner panel">
      Disponibilidad de la cabaña:
      <button class="disponiblidadCabania btn btn-primary"  data-idcabania="{$cabania['id_cabania']}" type="button">Cambiar</button>
    </div>
    <div class="panel">
      <button class="editarCabania btn btn-success"  data-idcabania="{$cabania['id_cabania']}" type="button">Editar Cabaña</button>
      <button class="eliminarCabania btn btn-danger"  data-idcabania="{$cabania['id_cabania']}">ELIMINAR CABAÑA</button>
    </div>
  {/if}

  <div class="cabaniaDisponibilidad">
    {if $cabania["ocupada"]}
    <div class="panel alerta-danger">
      <h4 >NO DISPONIBLE</h4>
    </div>
    {else}
    <div class="panel alerta-success">
      <h4 class="alert-success">DISPONIBLE</h4>
    </div>
    {/if}
  </div>
</div>


{/foreach}

{/if}
