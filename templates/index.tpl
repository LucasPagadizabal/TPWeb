{include file="header.tpl"}

<div id="listaCabanias">
  {include file="cabanias.tpl"}
</div>

<div class="coteiner panel">
<h1>Agregar cabaña</h1>
<form class="coteiner panel" id="formCabania" method="post" enctype="multipart/form-data">
  <input type="text" name="nombre" value="" placeholder="Nombre de la cabaña">
  <input type="text" name="descripcion" value="" placeholder="Descripcion de la cabaña">
  <input type="file" name="imagenes[]" required value="" multiple>
    Categoria:
  <select name="categoria">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
  <button type="submit" name="button">Enviar</button>
</form>
<div id="cabaniaCreadaMensaje"></div>
</div>


{include file="footer.tpl"}
