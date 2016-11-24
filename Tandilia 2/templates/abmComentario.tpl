<article>

    <div class="row">

      {if isset($mensaje)}
        <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
      {/if}

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Usuario</th>
            <th>Comentario</th>
            <th>Puntuacion</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$comentarios item=comentario}
          <tr>
            <td>{$comentario["nombre"]}</td>
            <td>{$comentario["textocomentario"]}</td>
            <td>{$comentario["puntuacion"]}</td>
            <td>  <a class="eliminarComentario" href="#" data-idcomentario="{$comentario['id_comentario']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
          {/foreach}
        </tbody>
      </table>

    </div>

</article>
