<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Categoria</th>
      <th>Descripcion</th>
      <th>Precio minorista</th>
      <th>Precio mayorista</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$productos item=producto}
    <tr>
      <td>{$producto["nombre"]}</td>
      <td>{$producto["nombre_categoria"]}</td>
      <td>{$producto["descripcion"]}</td>
      <td>{$producto["precio_min"]}</td>
      <td>{$producto["precio_may"]}</td>
      <td>  <a class="eliminarProducto" href="#" data-idproducto="{$producto['id_producto']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
    </tr>
    {/foreach}
  </tbody>
</table>
