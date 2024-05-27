<?php

class ControladorUsuarios
{
    //método para inicio de sesion "login"
    static public function controladorIngresoUsuario()
    {

        if (isset($_POST["nuevoUsuario"])) {
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {
                $encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                
                //llamamos a la variable que contiene el nombre de la tabla de la base de datos
                //eso esta en el modelo
                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST["ingUsuario"];

                //instanciando
                $respuesta = ModeloUsuarios::modeloMostrarUsuarios($tabla,$item,$valor);
                //condicional para validar si el usuario y la contraseña son correctas
                if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){
                    //condicional si el estado del usuario es activo
                    if($respuesta["estado"] == 1){
                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["idusuario"] = $respuesta["idusuario"];
                        $_SESSION["nombre"] = $respuesta["nombre"];
                        $_SESSION["usuario"] = $respuesta["usuario"];
                        $_SESSION["foto"] = $respuesta["foto"];
                        $_SESSION["perfil"] = $respuesta["perfil"];

                    //registrar fecha para saber el último login
                    date_default_timezone_set('America/Lima'); //muestra la fecha actual
                    $fecha = date('Y-m-d');
                    $hora = date('H:i:s');

                    $fechaActual = $fecha.''.$hora;

                    $item1 = "ultimo_login";
                    $valor1 = $fechaActual;

                    $item2 = "idusuario";
                    $valor2 = $respuesta["idusuario"];

                    //instancia con el modelo y método
                    $ultimoLogin = ModeloUsuarios::modeloActualizarUsuario($item1,$valor1,$item2,$valor2);

                    //condicional javascript
                    if($ultimoLogin == "ok"){
                        echo '<script>
                                window.location = "inicio";
                        </script>';
                    }

                    }else{

                        echo '<br>
                        <div class="alert alert-danger" role="alert">El usuario aún no está activado!</div>';

                    }
                }else{

                    echo '<br><div class="alert alert-danger" role="alert">Error al ingresar!</div>';

                }

            }
        }

    }

    //método para registrar usuario
    static public function controladorRegistrarUsuario(){

        if(isset($_POST["nuevoUsuario"])){
            
        }

    }

}