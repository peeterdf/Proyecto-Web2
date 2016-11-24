<article>

    <div class="row">

      {if isset($mensaje)}
        <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
      {/if}

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Comentario</th>
            <th>Usuario</th>
            <th>Producto</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$comentarios item=comentario}
          <tr>
            <td>{$comentario["nombre"]}</td>
            <td>{$comentario["email"]}</td>
            <td>{$comentario["admin"]}</td>
            <td>  <a class="eliminarComentario" href="#" data-idusuario="{$comentario['id_comentario']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
          {/foreach}
        </tbody>
      </table>

    </div>

</article>
