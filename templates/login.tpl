
<!-- <div class="panel"> -->
  <div class="conteiner panel">
    <div class="row">

  <form class="form-signin ajaxForm" href="index.php?action=login" method="post">

      <div class="form-group col-xs-4">

      <input class="form-control" type="email" name="email" value="" placeholder="Email">
    </div>
      <div class="form-group col-xs-4">

      <input class="form-control" type="password" name="pass" value="" placeholder="Contraseña">
    </div>
    <div class="form-group col-xs-2">

      <button class="btn btn-lg btn-primary" type="submit" name="button">Log In</button>
    </div>
  </form>

</div>
</div>
<!-- </div> -->

{if $msj!=""}
  {if $tipoMsj == 'ok'}
  <div class="panel alerta-success">
    {$msj}
  </div>
  {else}
  <div class="panel alerta-danger">
    {$msj}
  </div>
  {/if}
  {/if}
  <div class="conteiner panel">

    <div class="row">
      <form class="form-signin ajaxForm" href="index.php?action=crearUsuario" method="post">
        <div class="form-group col-xs-4">

        <input class="form-control" type="email" name="user" value="" placeholder="E-mail">
      </div>
      <div class="form-group col-xs-4">

        <input class="form-control" type="password" name="pass" value="" placeholder="Contraseña">
      </div>
      <div class="form-group col-xs-2">

        <button class="btn btn-lg btn-primary" type="submit" name="button">Crear Usuario</button>
      </div>
      </form>


    </div>
</div>
