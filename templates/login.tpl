<div class="panel">
  <div class="panel">
    <h3>Log In</h3>
  <form class="ajaxForm" href="index.php?action=login" method="post">
    <div class="form-group">
      <input type="email" name="email" value="" placeholder="Email">
      <input type="password" name="pass" value="" placeholder="Contraseña">
      <button type="submit" name="button">Log In</button>
    </div>
  </form>
  </div>
    <div class="panel">
      <h3>crear cuenta</h3>
      <form class="ajaxForm" href="index.php?action=crearUsuario" method="post">
        <input type="email" name="user" value="" placeholder="E-mail">
        <input type="password" name="pass" value="" placeholder="Contraseña">
        <button type="submit" name="button">enviar</button>
      </form>


    </div>

    <div class="panel">
      <div class="panel">
        {$msj}
      </div>
    </div>


</div>
