  <div class="panel">
    <form id="formBuscar"  method="post">
      <div class="form-group col-xs-2">
        <select class="form-control" name="id_categoria">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <button class="btn btn-primary" type="submit" name="">Buscar</button>
    </form>
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
