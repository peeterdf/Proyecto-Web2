<article>

  <div class="media-left">
      <h1>{$producto['nombre']} - <span class="scategoria">{$producto['nombre_categoria']}</span></h1>
  </div>

  <div class="">
    <p>{$producto['descripcion']} </p>
  </div>
  <div class="col-md-12">
    {if count($producto["imagenes"]) > 0}
      {foreach from=$producto['imagenes'] key=index item=imagen}
        <img src="{$imagen['path']}" alt="ProductoImagen_{$producto['nombre']}_{$imagen['id_imagen']}"  class="img-thumbnail imgproducto">
      {/foreach}
    {else if}
              <h4>El producto no posee imagenes</h4>
    {/if}
  </div>

    <!-- comentarios -->
    {if  isset($usuario)}
    <h3>Comentarios</h3>

        <div class="comentarios" data-idproducto="{$producto['id_producto']}">
<!--
          <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><img src="./images/icono.png" class="avatar" height="20"width="20">
                <span><i>usuario</i> comentó:</span></h3>
              </div>
            <div class="panel-body">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
            </div>
          </div>
-->

        </div>
        {/if}

        <div class="row comentarionuevo">
          <div class="col-md-12">
            <div class="panel panel-filled">
              <div class="panel-body">
                <form class="formcomentario"  method="post" href="api/comentario" data-idproducto="14">

                  <div class="form-group form-inline">
                    <label>Puntaje</label>
                    <select class="form-control" name="puntaje">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    <!--
                    <div class="ec-stars-wrapper">
                    	<a href="#" data-value="1" title="Votar con 1 estrellas">🍺</a>
                    	<a href="#" data-value="2" title="Votar con 2 estrellas">🍺</a>
                    	<a href="#" data-value="3" title="Votar con 3 estrellas">🍺</a>
                    	<a href="#" data-value="4" title="Votar con 4 estrellas">🍺</a>
                    	<a href="#" data-value="5" title="Votar con 5 estrellas">🍺</a>
                    </div>
                  -->
                  </div>
                  <div class="form-group">
                    <label>Comentario:</label>
                    <textarea class="form-control" name="textocomentario" rows="3" placeholder="Escriba un comentario..."></textarea>
                  </div>
                  <input type="hidden" name="id_producto" value="{$producto["id_producto"]}">
                  <input type="hidden" name="id_usuario" value="{$usuario["id"]}">
                  <button type="submit" class="btn btn-default" data-idproducto="14"
                  data-idusuario="7">Comentar</button>
                </form>
              </div>
            </div>
          </div>
        </div>

  </article>
