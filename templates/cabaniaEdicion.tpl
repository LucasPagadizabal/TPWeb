{if isset($cabania)}
<div class="panel">
  <p>
    <a href="index.php?action=cabania&id={$cabania['id_cabania']}"><h3>Cabaña {$cabania["nombre"]}</h3></a>
    <div class="panel">
      <p>
        Pertenece a la categoria {$cabania["id_categoria"]} estrella/as.
      </p>
    </p>
    <p>
      {$cabania["comentarios"]|truncate:15}
    </p>
  </div>


<div class="panel">

  <form class="ajaxForm" href="index.php?action=editarCabania" method="post">
    <div class="row">
    <div class="form-group col-xs-4">
      <input class="form-control" type="text" name="nombreEdit" value="{$cabania["nombre"]}">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-xs-10">
      <textarea class="form-control" name="descripcionEdit" rows="4">{$cabania["comentarios"]}</textarea>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-xs-2">
      <label>Nueva categoria</label>
      <select class="form-control" name="categoriaEdit">
        {foreach from=$categorias item=categoria}
        <option value="{$categoria['estrella']}">{$categoria["estrella"]}</option>
        {/foreach}
      </select>
    </div>
  </div>
  <div class="form-group">
    <input type="hidden" name="data-idcabania" value={$cabania['id_cabania']}>
    <button class="btn btn-primary" type="submit" name="button">Enviar</button>
  </div>
</form>
</div>
</div>
{/if}
