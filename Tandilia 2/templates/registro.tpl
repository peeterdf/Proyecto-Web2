    <div class="col-md-4 col-md-offset-4">

      <form class="form-signin" method="post" href="index.php?action=registrar_usuario">
        <h2>Ingrese sus datos!</h2>
        {if isset($error)}
          <h3 class="alert" role="alert">{$error}</h3>
        {/if}
        <label>Nombre</label>
        <input type="name" name="user" class="form-control" placeholder="José Perez" required autofocus>
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="ejemplo@email.com" required autofocus>
        <label>Contraseña</label>
        <input type="password" name="pass" class="form-control" placeholder="*********" required autofocus>
        <label>Comfirme la Contraseña</label>
        <input type="password" name="confirmpass" class="form-control" placeholder="*********" required autofocus>
        <button type="submit"  class="btn btn-lg btn-default ">Registrarse!</button>
      </form>

    </div>
