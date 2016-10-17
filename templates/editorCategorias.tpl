<div class="panel">
  <div class="col-md-offset-4">
    {foreach from=$categorias item=categoria}
    <form class="editarCategoria"  method="post">
      <input type="text" name="valorInput" value="{$categoria['estrella']}">
      <input type="hidden" name="data-idcategoria" value={$categoria['id_categoria']}>
      <button class="btn btn-success editarCategoria" type="submit" name="button">Editar</button>
      <button class="btn btn-danger eliminarCategoria" data-id-categoria="{$categoria['id_categoria']}" type="submit" name="button">Eliminar</button>
    </form>
    {/foreach}
    <form id="formCrearCat" class="" method="post">
      <input type="text" name="valorCategoria" value="" placeholder="Categoria">
      <button class="btn btn-primary" type="submit" name="button">Crear</button>
    </form>
  </div>
</div>
