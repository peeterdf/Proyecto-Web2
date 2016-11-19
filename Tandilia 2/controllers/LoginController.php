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

    if(isset($_POST["usuario"]) && isset($_POST["pass"])){
      $user = $_POST["usuario"];
      $pass = $_POST["pass"];
      $userReg = $this->modelo->getUser($user);
      $passReg = $userReg["pass"];


      $hash = password_hash("qwerty", PASSWORD_DEFAULT);
      print_r($hash);
//  if(password_verify($pass, $passReg)){
      if($pass == $passReg){
        echo "string2";
        $_SESSION["id"] = $userReg["id_usuario"];
        $_SESSION["usuario"] = $userReg["nombre"];
        $_SESSION["email"] = $userReg["email"];
        header("Location: index.php");
        die();
      }
      else {
        $this->vista->agregarError('El usuario o la contraseña son incorrectos'); }
      }
      $this->vista->mostrar([]);
    }


  public function checkLogin(){
    session_start();
    if(!isset($_SESSION['USER'])){
      header("Location: index.php");
      die();
    };
  }

  public function logout(){
    session_start();
    session_destroy();
    header("Location: index.php?action=login");
    die();
  }

}

 ?>
