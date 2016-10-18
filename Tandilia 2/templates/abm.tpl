<article>

    <div class="row">

      {if isset($mensaje)}
        <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
      {/if}
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>nombre</th>
            <th>descripcion</th>
            <th>precio_min</th>
            <th>precio_may</th>
            <th>categoria</th>
            <th>modificar</th>
            <th>eliminar</th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$productos item=producto}
          <tr>
            <td>{$producto["nombre"]}</td>
            <td>{$producto["descripcion"]}</td>
            <td>{$producto["precio_min"]}</td>
            <td>{$producto["precio_may"]}</td>
            <td>categoria</td>
            <td>boton modificar</td>
            <td>  <a class="eliminarProdcutos" href="#" data-idproducto="{$productos['id_producto']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
          {/foreach}
        </tbody>
      </table>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-agrega btn btn-default">Agregar</button>

    <div class="mostrar col-md-12">
      <form class="form-horizontal formulario"  id="formProductos" action="guardar_producto" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label class="col-sm-2 control-label">Cerveza</label>
        <input class="" type="text" name="nombre" id="Tcerveza">
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Descripcion</label>
        <input class="" type="textarea" name="descripcion" id="Cdescripcion">
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Precio Mayorista</label>
        <input class="" type="number" name="precio_may" id="Pmayorista">
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Precio Minorista</label>
        <input class="" type="number" name="precio_min" id="Pminorista">
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Categoria</label>
        <input class="" type="number" name="categoria_id" id="Ncategoria">
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Imagenes</label>
        <input type="file" name="imagenes[]" required value="" multiple>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input class="btn-enviar btn btn-default" type="submit" name="Enviar">
          </div>
        </div>
      </form>



    </div>
</article>
