<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuestas</title>
</head>
<body>
    <?php
   $pass = [
    "brayan" => "torres",
    "sebastian" => "sanchez",
    "fabian" => "meza",
    ];
    if (isset($pass[$_GET['usser']])){
        if ($pass[$_GET['usser']] == $_GET['pass']){
            echo '<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="AppC.css" type="text/css">
    <script type="text/javascript" src="Page.js"></script>
    <title>App</title>
</head>

<body>

    <!-- navbar -->
    <header class="nav_bar fixed-top">

        <div class="menu_bar">
            <p href="#" class="boton_menu"><span class="icon-menu"></span>Menu</p>
        </div>

        <nav class="barra">
            <ul class="items_list">
               <li class="items_nav"><a href=lista.html>Lista de Gustos</a></li>
                <li class="items_nav"><a href="../Login.php">Salir</a></li>
            </ul>
        </nav>
    </header>
    <br>


    <form name="f1" id="formulair">
        <b>
            <h1 id="titulo">Dessert</h1>
        </b>
        <div id="ps">
            <img src="foto1.jpg" id="IMGPostre">
            <b>
                <article>
                    <h2 id="nombresinho">Waffles Glaseados</h2>
                </article>
            </b>
            <div class="boxes">
                <input type="button" id="R" class="botones" value="" onclick="rechazar()">
                <input type="button" id="G" class="botones" value="" onclick="SGustos()">
                <input type="button" id="SG" class="botones" value="" onclick="gustos()">
            </div>
        </div>
    </form>
    <!-------------------------------------------------PHP------------------------------------------------------------->

</body>
<br><br><br>
<footer class="footer">
    Disfruta nosotros hacemos el resto &#128521;
</footer>



</html>';
        }else{
            echo 'lol';
        }
    }else{
        echo '
        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">

</head>

    <body id="Login">
    window.alert("El usuario no existe");
    alert("El usuario no existe");
    </body>


</html>';
    }
    ?>
</body>
</html>
