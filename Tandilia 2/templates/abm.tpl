<article>

    <div class="row">

      {if isset($mensaje)}
        <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
      {/if}
<div class="tablaabm">

  {include file="abmtabla.tpl"}
</div>
  
    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-agregaprod btn btn-default">Agregar Producto</button>

    <div class="mostrarprod col-md-12">
      <form class="form-horizontal formulario"  id="formProductos" action="index.php?action=guardar_producto" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label class="col-sm-2 control-label">Cerveza</label>
        <input class="" type="text" name="nombre" id="Tcerveza">
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Categoria</label>
        <select class="selectpicker" name="fk_id_categoria" id="Ncategoria">
          {foreach from=$categorias item=categoria}
          <option value="{$categoria['id_categoria']}" >{$categoria["nombre"]}</option>
          {/foreach}
        </select>

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
        <label class="col-sm-2 control-label">Imagenes</label>
        <input type="file" name="imagenes[]" required value="" multiple>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input class="btn-enviarprod btn btn-default" type="submit" name="Enviar">
          </div>
        </div>
      </form>

    </div>



    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-agregacat btn btn-default">Agregar Categoria</button>

    <div class="mostrarcat col-md-12">
      <form class="form-horizontal formulario" action="index.php?action=guardar_categoria" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label class="col-sm-2 control-label">Nombre</label>
          <input class="" type="text" name="nombre" required value="">
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input class="btn-enviarcat btn btn-default" type="submit" name="Enviar">
          </div>
        </div>
      </form>
    </div>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-borrarcat btn btn-default">Eliminar Categoria</button>

    <div class="borrarcat col-md-10 col-md-offset-1 ">
      <form class="form-horizontal formulario"  id="formProductos"  method="post" enctype="multipart/form-data">

        <div class="form-group">
        <ul>
          {foreach from=$categorias item=categoria}
          <li>
          <a class="eliminarCategoria" href="#" data-idcategoria="{$categoria['id_categoria']}">{$categoria['nombre']}</a>
          </li>
          {/foreach}
          </ul>
      </form>

    </div>
</div>

</article>
