{if isset($cabanias)}

    {foreach from=$cabanias item=cabania}

    <div class="panel">
        <p>
          Cabañia Nº {$cabania["id_cabania"]}, pertenece a la categoria {$cabania["categoria"]} estrellas.
        </p>
        <p>
          {$cabania["comentarios"]|truncate:15}
          <a href="index.php?action=cabania&id={$cabania["id_cabania"]}">Ver mas </a>
        </p>
        <a class="eliminarCabania" href="" data-idcabania="{$cabania['id_cabania']}">Eliminar</a>
    </div>


    {/foreach}

{/if}
  {else}
    <p>
      hola
    </p>
    {/else}
