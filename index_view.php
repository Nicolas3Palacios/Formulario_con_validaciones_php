<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario contacto</title>
</head>

<body>
    <div class="formulario">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="<?php echo (isset($nombre) && !$enviado) ? $nombre: '' ;?>">

            <input class="form-control" type="text" id="email" name="email" placeholder="Ingrese su rmail" value="<?php echo (isset($email) && !$enviado) ? $email: '' ;?>">

            <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Ingrese su mensaje" ><?php echo (isset($mensaje) && !$enviado) ? $mensaje: '' ;?></textarea>

            
            <?php if(!empty($errores)): ?>
            <div class="alert error">
            <ul>
               <?php echo "$errores"; ?>
            </ul>
            </div>
            <?php elseif($enviado): ?>
                <div class="alert success"><p>Enviado Correctamente &#128232</p></div>
            <?php endif ?>


            <input type="submit" value="Enviar" name="submit" class="btn btn-primary">

        </form>
    </div>
</body>
</html>