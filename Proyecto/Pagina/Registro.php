<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/estiloB.css" type="text/css">
    <title>Registrar</title>
</head>

<body id="RB">
    <br><br><br><br><br><br><br><br><br><br>
    <form id="R" action="registrar.php" mothod="post" class="from-registrar" onsubmit="return validar();">
        <h3 id="qq">Registro</h3>
        <div id=gg><input class="i" id="NU" type="text" name="Nombreusuario" placeholder="Nombre usuario" required></div>
        <input class="i" id="NC" type="text" name="Contraseña" placeholder="Contraseña" required>
        <input class="i" id="CC" type="text" name="Confirmarcontraseña" placeholder="Confirmar contraseña" required>
        <input class="i" id="CE" type="email" name="Correoelectronico" placeholder="Correo electronico" required>
        <label id="oo"><input id="checkbox" type="checkbox" vale="Terminos y condiciones" required> Terminos y condiciones</label>
        <input id="boton" type="Submit" Value="Registrar">
    </form>



    <script src="Page.js" type="text/javascript"></script>

 <!-------------------------------------------------PHP------------------------------------------------------------->
   <?php
        if (isset($_COOKIE['test'])){
            echo '<p>Bienvenido/p>';
            setcookie('test', '', time() + 3600);
        }else {
            echo '<p>A DESSERTS</p>';
            setcookie('test', 'Profe van 9 horas sin parar de esto' );
        }
    ?>





</body></html>
