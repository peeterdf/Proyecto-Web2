<?php
require_once('views/LoginView.php');
require_once('models/UserModel.php');


class LoginController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new UserModel();
    $this->vista = new LoginView();
  }

  public function login(){

    if(isset($_POST["user"]) && isset($_POST["pass"])){
      $user = $_POST["user"];
      $pass = $_POST["pass"];
      $userReg = $this->modelo->getUser($user);
      $passReg = $userReg["pass"];

      if(password_verify($pass, $passReg)){
        $_SESSION["id"] = $userReg["id_usuario"];
        $_SESSION["user"] = $userReg["nombre"];
        $_SESSION["email"] = $userReg["email"];
        header("Location: index.php");
        die();
      }
      else {
        $this->vista->agregarError('El usuario o la contraseña son incorrectos'); }
      }
      $this->vista->mostrar();
  }

    function registrar_usuario() {
      $newUsuario = [];
      if( (isset($_POST['user'])) && (isset($_POST['pass'])) && (isset($_POST['email']))){
          $newUsuario["user"] = $_POST['user'];
          $newUsuario["email"] = $_POST['email'];
          $newUsuario["pass"] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
          $this->modelo->altaUsuario($newUsuario);
          $this->login();
        }
      $this->vista->mostrarRegistro();
    }


    public function logout(){
      session_destroy();
      header("Location: index.php");
      die();
    }

}

 ?>
