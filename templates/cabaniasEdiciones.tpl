{if $privilegio == 1}
<div class="coteiner panel">
  <h1>Crear nueva cabaña</h1>
  <form class="conteiner panel ajaxForm" href="index.php?action=crearCabania" method="post" enctype="multipart/form-data">
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
          {foreach from=$categorias item=categoria}
          <option value="{$categoria['id_categoria']}">{$categoria["estrella"]}</option>
          {/foreach}
      </select>
      <button class="btn btn-success nav-link" href="editorCategorias" type="button">Editar Categorias</button>
      </div>
    </div>
    <div class="form-group"><button class="btn btn-primary" type="submit" name="button">Enviar</button></div>
  </form>
</div>
<div id="cabaniaCreadaMensaje"></div>
</div>

  <div class="panel">

    <h3>Editar Permisos de Usuario</h3>
    <div class="panel">

    <form class="ajaxForm" href="index.php?action=editarUsuario" method="post">
      <div class="row">
      <div class="form-group col-xs-4">

      <select name="nameUser" class="form-control"  name="categoria">
        {foreach from=$usuarios item=usuario}
        <option  value="{$usuario['email']}">{$usuario['email']}
          {if $usuario['privilegio'] == 1}
          ---ADMIN---
          {else}
          ---USUARIO---
          {/if}
        </option>
        {/foreach}
      </select>
    </div>
  </div>
        <button class="btn btn-primary" type="submit" name="editUsuario">Cambiar permisos a este usuario</button>
    </form>
  </div>
  </div>

{if isset($cabanias)}
{foreach from=$cabanias item=cabania}
<div class="panel">
  <p>
    <a class="nav-link-cabania" href="cabania" data-idcabania="{$cabania['id_cabania']}"><h3>Cabaña {$cabania["nombre"]}</h3></a>
    <div class="panel">
      <p>
        Pertenece a la categoria {$cabania["categoria"]} estrella/as.
      </p>
    </p>
    <p>
      {$cabania["comentarios"]|truncate:15}
    </p>
  </div>

    <div class="panel">
      <button class="btn btn-primary nav-link-cabania" href="editarDispCabania" data-idcabania="{$cabania['id_cabania']}" type="button">Cambiar Disponibilidad</button>
      <button class="btn btn-success nav-link-cabania" href="editorDeCabania" data-idcabania="{$cabania['id_cabania']}" type="button">Editar Cabaña</button>
      <button class="btn btn-danger nav-link-cabania btnEliminarCab" href="borrarCabania" data-idcabania="{$cabania['id_cabania']}">ELIMINAR CABAÑA</button>
    </div>


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

{else}
  <h1>No posee permiso</h1>
  {/if}
