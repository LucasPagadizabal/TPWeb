<div class="panel">
  <div class="panel container">
  <form class="form-signin ajaxForm" href="index.php?action=login" method="post">
      <h3 class="form-signin-heading">Log In</h3>
      <input class="form-control" type="email" name="email" value="" placeholder="Email">
      <input class="form-control" type="password" name="pass" value="" placeholder="Contraseña">
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="button">Log In</button>
  </form>

</div>

<div class="panel">
  <div class="panel">
    {$msj}
  </div>
</div>

    <div class="panel container">
      <form class="form-signin ajaxForm" href="index.php?action=crearUsuario" method="post">
        <h3 class="form-signin-heading">Crear cuenta</h3>
        <input class="form-control" type="email" name="user" value="" placeholder="E-mail">
        <input class="form-control" type="password" name="pass" value="" placeholder="Contraseña">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="button">Crear</button>
      </form>


    </div>

</div>
