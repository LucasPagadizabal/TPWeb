<div class="panel">
  <div class="col-md-offset-5">
    <label for="ajaxForm">Buscar cabaña por categoria</label>
    <form class="ajaxForm" href="index.php?action=buscarCabaniasCat"  method="post">
      <div class="form-group col-xs-3">
        <select class="form-control" name="id_categoria">
          {foreach from=$categorias item=categoria}
          <option value="{$categoria['estrella']}">{$categoria["estrella"]}</option>
          {/foreach}
        </select>
      </div>
      <button class="btn btn-primary" type="submit" name="">Buscar</button>
    </form>
  </div>
</div>
{if isset($lista) && $lista }
  <div class="panel">
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
    <div class="panel">
      <h4>{$mensaje}</h4>
    </div>
  </div>
  {/if}
