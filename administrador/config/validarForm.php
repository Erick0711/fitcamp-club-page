<?php 
    if (isset($_POST['submit'])) {
        
        switch (isset($_POST['submit'])) {
            case empty($username):
                echo "<p>POR FAVOR INGRESA UNA DATO EN NOMBRE</p>";
                break;
                // case !empty($username >= 15):
                //     echo "<p>Tu número no es menor a lo que pedimos</p>";
                //     break;
            case empty($email):
                echo "<p>*Por favor ingresar un correo correcto</p>";
                    break;

                    case !empty($email):
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                            echo "TU CORREO ES VALIDO";
                        }else{
                            echo "TU CORREO ES INVALIDo";
                        };
                            break;

            case empty($password):
                echo "<p>Por favor ingresa un contraseña</p>";
                        break;
            
            default:
            $sql = $conexion->prepare("INSERT INTO `usuarios_login` (`id`, `username`, `email`, `pass_word`) VALUES (NULL, '$username', '$email', '$password'); ");

            $sql->execute();
    
            $sqlRegistros = $sql->fetch();

            header("Location:./inicio.php");
                break;
        }
    }
?>