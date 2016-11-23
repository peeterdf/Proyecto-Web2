<ul class="media-list">
  {foreach from=$productos key=index item=producto}
  <li class="media">
    <div class="media-left">
      <a class="">
        <img class="media-object" src="./images/icono.png" alt="" />
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading" >{$producto['nombre']}</h4>
    <p>
      {$producto['nombre_categoria']}
    </p>
    <p>
      {$producto['descripcion']}
    </p>
    <button type="button" class="btn btn-rounded btn-default btn-xs ampliarproducto" data-idproducto={$producto['id_producto']}>Ver más</button>
    <p>
      {foreach from=$producto['imagenes'] key=index item=imagen}
      <img src="{$imagen['path']}" alt="ProductoImagen_{$producto['nombre']}_{$imagen['id_imagen']}"  class="img-thumbnail imgproducto">
      {/foreach}
    </p>
    </div>
  </li>
  {/foreach}
</ul>
