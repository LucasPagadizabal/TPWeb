
{if isset($cabanias)}

{if !$sesion}
<div class="conteiner">
  <a class="nav-link" href="mostrarLogin">Log in</a>
</div>
{else}
<div class="conteiner">
  <a class="nav-link" href="cerrarSesion">Cerrar Sesion</a>
</div>
{/if}

{foreach from=$cabanias item=cabania}
<div class="panel ">
  <p>
    <a class="comentarios" href="cabania" data-idcabania="{$cabania['id_cabania']}"><h3>Cabaña {$cabania["nombre"]}</h3></a>
    <div class="panel">
      <p>
        Pertenece a la categoria {$cabania["categoria"]} estrella/as.
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

{/if}
