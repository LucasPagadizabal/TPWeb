<div class="panel">
  <div class="col-md-offset-4">
    {foreach from=$categorias item=categoria}
    <form class="ajaxForm" href="index.php?action=editarCategoria"  method="post">
      <input type="text" name="valorInput" value="{$categoria['estrella']}">
      <input type="hidden" name="data-idcategoria" value={$categoria['id_categoria']}>
      <button class="btn btn-success" type="submit" name="button">Editar</button>
      <button class="btn btn-danger nav-link-categoria" href="eliminarCategoria" data-id-categoria="{$categoria['id_categoria']}" type="button" name="button">Eliminar</button>
    </form>
    {/foreach}
    <form class="ajaxForm" href="index.php?action=crearCategoria" method="post">
      <input type="text" name="valorCategoria" value="" placeholder="Categoria">
      <button class="btn btn-primary" type="submit" name="button">Crear</button>
    </form>
  </div>
</div>
