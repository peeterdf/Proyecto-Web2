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
      {$producto['descripcion']}
    </p>
    </div>
  </li>
  {/foreach}
</ul>
