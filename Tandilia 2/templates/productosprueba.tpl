<article>
   <h1>Tener en cuenta al tomar una cerveza</h1>
    <p>La temperatura adecuada para beber una cerveza artesanal no es “bajo cero”, ni con la botella congelada, ni “punto frozen” o todas
        esas cosas que apunta el marketing de la cerveza industrial.  ¿Por qué? Porque a esas temperaturas se pierden los aromas y nuestras
        papilas no pueden saborear la bebida.
        Las grandes cerveceras imponen esa idea en el consumidor para tapar la baja calidad de sus productos.  Se puede hacer una prueba:
        elija una cerveza artesanal y una industrial y déjelas tomar temperatura  ambiente, cuando huela y pruebe ambas notará la diferencia:
        la industrial es intomable.
    </p>
    <div class="col-md-10 col-md-offset-1">
        <img src="./images/baner.jpg" class="img-responsive thumbnail" alt="cerveza">
    </div>
    {if isset($mensaje)}
      <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
    {/if}
    <div class="col-md-12 prodprueba" id="listaProducto" >
      {include file="productoslista.tpl"}
    </div>
    <div class="row">

    <button type="button" name="button"class="col-md-10 col-md-offset-1 btn-agrega btn btn-default">Agregar</button>

    <div class="mostrar col-md-12">
      <form class="form-horizontal formulario"  id="formProductos" action="guardar_producto" method="post" enctype="multipart/form-data">
        <label class="control-label">Cerveza</label>
        <input class="" type="text" name="nombre" id="Tcerveza">
        <label class="control-label">Descripcion</label>
        <input class="" type="textarea" name="descripcion" id="Cdescripcion">
        <label class="control-label">Precio Mayorista</label>
        <input class="" type="number" name="precio_may" id="Pmayorista">
        <label class="control-label">Precio Minorista</label>
        <input class="" type="number" name="precio_min" id="Pminorista">
        <input class="btn-enviar btn btn-default" type="submit" name="Enviar">
      </form>
    </div>
    </div>
</article>
