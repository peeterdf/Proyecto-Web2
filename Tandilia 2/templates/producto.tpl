<article>

  <div class="media-left">
      <h1><img class="media-object" src="./images/icono.png" alt=""/>{$producto['nombre']} - <span>{$producto['nombre_categoria']}</span>
      </h1>
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

    <h3>Comentarios</h3>
        <div class="comentarios">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><img src="./images/icono.png" class="avatar" height="20"width="20">
                <span><i>usuario</i> comentó:</span></h3>
              </div>
            <div class="panel-body">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
            </div>
          </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-filled">
              <div class="panel-body">
                <form class="">
                  <div class="form-group form-inline">
                    <label>Puntaje:</label>
                    <select class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option selected>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Comentario:</label>
                    <textarea class="form-control" rows="3" placeholder="Escriba un comentario..."></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Comentar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>

  </article>
