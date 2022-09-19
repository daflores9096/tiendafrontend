<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frontend Store</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header class="header">
    <a href="index.php">
        <img class="header__logo" src="img/logo.png" alt="Logotipo">
    </a>
</header>

<nav class="navegacion">
    <a class="navegacion__enlace" href="./">Tienda</a>
    <a class="navegacion__enlace navegacion__enlace--activo" href="nosotros.php">Nosotros</a>
</nav>

<main class="contenedor">
    <h1>React JS</h1>

    <div class="camisa">
        <img class="camisa__imagen" src="img/3.jpg" alt="React JS">
        <div class="camisa__contenido">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper posuere lacus. Pellentesque tincidunt, quam vel eleifend ornare, mauris nunc facilisis lacus, nec scelerisque libero leo sit amet orci.</p>
            <form class="formulario">
                <select class="formulario__campo" name="talla" id="talla">
                    <option disabled selected>-- Seleccionar talla --</option>
                    <option value="1">Chica</option>
                    <option value="2">Mediana</option>
                    <option value="3">Grande</option>
                </select>
                <input class="formulario__campo" type="number" name="cantidad" id="cantidad" placeholder="Cantidad" min="1">
                <input class="formulario__submit" type="submit" value="Agregar al Carrito">
            </form>
        </div>
    </div>
</main>

<footer class="footer">
    <p class="footer__texto">Frontend Store - Copyright 2022</p>
</footer>

</body>
</html>
