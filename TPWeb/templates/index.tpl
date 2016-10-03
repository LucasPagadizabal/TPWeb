{include file="header.tpl"}

<div class="coteiner panel">
<h1>Agregar cabaña</h1>
<form class="" action="index.php?action=crearCabania" method="post">
  <input type="text" name="descripcion" value="" placeholder="Descripcion de la cabaña">
  <input type="text" name="categoria" value="" placeholder="Categoria">
  <p>
    Categoria:
  </p>
  <select class="form-control">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
  <button type="submit" name="button">Enviar</button>
</form>
</div>


<div id="listaCabanias">
  
</div>


{include file="footer.tpl"}
