<?php
    $errores = '';
    $enviado = false;
    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        
        if (!empty($nombre)) {
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        }else{
            $errores .= '<li>Porfavor ingrese un nombre &#10060.</li> <br>'; 
        }

        if (!empty($email)) {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errores .= '<li>Porfavor ingrese un correo valido &#10060.</li> <br>'; 
            }

        }else{
            $errores .= '<li>Porfavor ingrese un correo &#10060.</li> <br>'; 
        }

        if (!empty($mensaje)) {

            $mensaje = htmlspecialchars($mensaje);
            $mensaje = trim($mensaje);
            $mensaje = stripcslashes($mensaje);

        }else{
            $errores .= '<li>Porfavor ingrese un mensaje &#10060.</li>';
        }
        
        if(!$errores){

            $enviar_a = 'nikosoma134@gmial.com';
            $asunto = 'Correo enviado desde Formulario Contacto Pagina';
            $correo = "De: $nombre \n";
            $correo .= "Correo: $email \n";
            $correo .= "Mensaje: $mensaje";
            
            // mail($enviar_a, $asunto, $correo);

            $enviado = true;
        }
    }
    require 'index_view.php';
?>