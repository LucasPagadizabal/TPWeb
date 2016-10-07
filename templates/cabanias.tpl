{if isset($cabanias)}

    {foreach from=$cabanias item=cabania}

    <div class="panel">
        <p>
          Cabaña {$cabania["nombre"]}, pertenece a la categoria {$cabania["id_categoria"]} estrella/as.
        </p>
        <p>
          {$cabania["comentarios"]|truncate:15}
          <a href="index.php?action=cabania&id={$cabania['id_cabania']}">Ver mas </a>
        </p>
        <a class="eliminarCabania" href="#" data-idcabania="{$cabania['id_cabania']}">Eliminar</a>
        <a class="editarCabania" href="#" data-idcabania="{$cabania['id_cabania']}">Editar</a>
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
