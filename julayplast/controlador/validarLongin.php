<?php
    session_start();
    require_once "../modelo/CRUDUsuarios.php";

    $registrar=array(
        'usuario'=>$_POST['txtusuario'],
        'clave'=>$_POST['txtclave']
    );
    //Instanciamos un objecto de la clase usuario
    $datos=new Clientes;

    $datos->loginUsuario($registrar);

    if($datos){
        echo '<p class="Error">El usuario no EXISTE!!!';
        header('location.login.php');
    }
    elseif($datos->rowCount()===1){
        echo '<p class="success">BIENVENIDOS AL SITIO WED!!!</p>';
        $_SESSION['nombre']=$datos->usuario;
        header('Location:index.php');
    }
?>