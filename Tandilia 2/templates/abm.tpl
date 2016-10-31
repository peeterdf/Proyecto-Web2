<article>

    <div class="row">

      {if isset($mensaje)}
        <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
      {/if}
<div class="tablaabm">

  {include file="abmtabla.tpl"}
</div>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-agregaprod btn btn-default">Agregar Producto</button>

    <div class="ocultarabm mostrarprod col-md-11 col-md-offset-1">
      <form class="form-horizontal formularioabm col-md-10 col-md-offset-1 margen"  id="formProductos" href="index.php?action=guardar_producto" method="post" enctype="multipart/form-data">
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
        <input class="" type="textarea" name="descripcion" id="Cdescripcion" value="sadasdasd">
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Precio Mayorista</label>
        <input class="" type="number" name="precio_may" id="Pmayorista" value="123">
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Precio Minorista</label>
        <input class="" type="number" name="precio_min" id="Pminorista" value="123">
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

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-editaprod btn btn-default">Editar Producto</button>
    <div class="ocultarabm editaprod col-md-11 col-md-offset-1">
      <form class="form-horizontal  formularioabm col-md-10 col-md-offset-1 margen"  id="formProductos" href="index.php?action=editar_producto" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label class="col-sm-2 control-label">Nombre</label>
          <select name="id_producto">
              {foreach from=$productos item=producto}
              <option  value="{$producto['id_producto']}">{$producto["nombre"]}</option>
              {/foreach}
          </select>
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
          <input class="" type="textarea" name="descripcion" id="Cdescripcion" value="sadasdasd">
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Precio Mayorista</label>
          <input class="" type="number" name="precio_may" id="Pmayorista" value="">
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Precio Minorista</label>
          <input class="" type="number" name="precio_min" id="Pminorista" value="">
        </div>

        <div class="col-sm-offset-2 col-sm-10">
            <input class="btn-editaprod btn btn-default editarProducto " type="submit" name="Enviar">
        </div>
      </form>
    </div>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-agregacat btn btn-default">Agregar Categoria</button>

    <div class="ocultarabm mostrarcat col-md-11 col-md-offset-1">
      <form class="form-horizontal formularioabm col-md-10 col-md-offset-1 margen" href="index.php?action=guardar_categoria" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label class="col-sm-2 control-label">Nombre</label>
          <input class="" type="text" name="nombre" required value="">
        </div>
        <div class="col-sm-offset-2 col-sm-10">
            <input class="btn-enviarcat btn btn-default" type="submit" name="Enviar">
        </div>
      </form>
    </div>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-borrarcat btn btn-default">Eliminar Categoria</button>

    <div class="ocultarabm borrarcat col-md-11 col-md-offset-1">
      <form class="form-horizontal formulario"  id="formProductos"  method="post" enctype="multipart/form-data">

        <div class="form-group">
          <ul>
            {foreach from=$categorias item=categoria}
            <li>
              <a class="eliminarCategoria" href="#" data-idcategoria="{$categoria['id_categoria']}">{$categoria['nombre']}</a>
            </li>
            {/foreach}
          </ul>
        </div>

      </form>
    </div>

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-editacat btn btn-default">Editar Categoria</button>

    <div class="ocultarabm editacat col-md-11 col-md-offset-1">
      <form class="form-vertical  formularioabm col-md-10 col-md-offset-1 margen"  id="formProductos" href="index.php?action=editar_categoria" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label class="col-sm-2 control-label">Categoria</label>
          <select class=""  name="id_categoria">
            {foreach from=$categorias item=categoria}
            <option  value="{$categoria['id_categoria']}">{$categoria["nombre"]}</option>
            {/foreach}
          </select>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Nombre</label>
          <input class="" type="text" name="nombre" required value="">
        </div>

        <div class="col-sm-offset-2 col-sm-10">
            <input class="btn-editaprod btn btn-default editarProducto" type="submit" name="Enviar">
        </div>
      </form>
    </div>


    </div>

</article>
