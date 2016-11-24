<article>

    <div class="row">

      {if isset($mensaje)}
        <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
      {/if}

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Privilegios</th>
            <th>Eliminar</th>
            <th>Editar Privilegio</th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$usuarios item=usuario}
          <tr>
            <td>{$usuario["nombre"]}</td>
            <td>{$usuario["email"]}</td>
            <td>{$usuario["admin"]}</td>
            <td>  <a class="eliminarUsuario" href="#" data-idusuario="{$usuario['id_usuario']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
            <td>  <a class="editarPrivilegio" href="#" data-idusuario="{$usuario['id_usuario']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
          {/foreach}
        </tbody>
      </table>

    </div>

</article>
