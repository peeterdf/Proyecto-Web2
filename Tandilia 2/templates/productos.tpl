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
</article>
