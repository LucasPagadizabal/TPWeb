<div class="panel">
  <div class="panel">
    <h3>Log In</h3>
  <form class="ajaxForm" href="index.php?action=login" method="post">
    <div class="form-group">
      <input type="text" name="email" value="" placeholder="Email">
      <input type="text" name="pass" value="" placeholder="Contraseña">
      <button type="submit" name="button">Log In</button>
    </div>
  </form>
  </div>
    <div class="panel">
      <h3>crear cuenta</h3>
      <form class="ajaxForm" href="index.php?action=crearUsuario" method="post">
        <input type="text" name="user" value="" placeholder="E-mail">
        <input type="text" name="pass" value="" placeholder="Contraseña">
        <button type="submit" name="button">enviar</button>
      </form>

      <div class="panel">
        {$msj}
      </div>
    </div>



</div>
