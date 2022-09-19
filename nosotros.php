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
    <h1>Nosotros</h1>

    <div class="nosotros">
        <div class="nosotros__contenido">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis neque sit amet metus molestie interdum. Nunc posuere porta placerat. Donec placerat ullamcorper felis auctor mollis. Cras ac est ut enim pellentesque scelerisque. Praesent auctor lectus dui, id faucibus turpis consectetur sit amet. Donec ornare nisl eu feugiat feugiat. Nunc malesuada libero ac felis aliquam, et pharetra nunc porttitor. Aliquam aliquam iaculis erat quis facilisis.</p>
            <p>Sed nisl magna, tincidunt et tellus et, lacinia fringilla nunc. Morbi eleifend consectetur rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque non elementum urna, eget condimentum dolor. Mauris ornare libero a nibh dictum, at aliquet sapien sodales. Nullam in sapien a lorem tincidunt pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
        </div>
        <img class="nosotros__imagen" src="img/nosotros.jpg" alt="Nosotros">
    </div>
</main>

<section class="contenedor comprar">
    <h2 class="comprar__titulo">¿Por que comprar con nosotros?</h2>
    <div class="bloques">
        <div class="bloque">
            <img class="bloque__imagen" src="img/icono_1.png" alt="por que comprar">
            <h3 class="bloque__titulo">El Mejor Precio</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis neque sit amet metus molestie interdum. Nunc posuere porta placerat. Donec placerat ullamcorper felis auctor mollis.</p>
        </div>
        <div class="bloque">
            <img class="bloque__imagen" src="img/icono_2.png" alt="por que comprar">
            <h3 class="bloque__titulo">Para DEVs</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis neque sit amet metus molestie interdum. Nunc posuere porta placerat. Donec placerat ullamcorper felis auctor mollis.</p>
        </div>
        <div class="bloque">
            <img class="bloque__imagen" src="img/icono_3.png" alt="por que comprar">
            <h3 class="bloque__titulo">Envio Gratis</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis neque sit amet metus molestie interdum. Nunc posuere porta placerat. Donec placerat ullamcorper felis auctor mollis.</p>
        </div>
        <div class="bloque">
            <img class="bloque__imagen" src="img/icono_4.png" alt="por que comprar">
            <h3 class="bloque__titulo">La Mejor Calidad</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis neque sit amet metus molestie interdum. Nunc posuere porta placerat. Donec placerat ullamcorper felis auctor mollis.</p>
        </div>
    </div>
</section>

<section>
    <div class="contenedor opciones">
        <div class="bloques2">
            <div class="bloque2">
                <div class="bloque2__titulo"><h3>Opcion 1</h3></div>
                <div class="bloque2__descr"><p>Detalle de la opcion observada para el usuario actual. Esta opcion debe adecuarse a la resolucion de pantalla.</p></div>
            </div>
            <div class="bloque2">
                <div class="bloque2__titulo"><h3>Opcion 2</h3></div>
                <div class="bloque2__descr"><p>Detalle de la opcion observada para el usuario actual. Esta opcion debe adecuarse a la resolucion de pantalla.</p></div>
            </div>
            <div class="bloque2">
                <div class="bloque2__titulo"><h3>Opcion 3</h3></div>
                <div class="bloque2__descr"><p>Detalle de la opcion observada para el usuario actual. Esta opcion debe adecuarse a la resolucion de pantalla.</p></div>
            </div>
            <div class="bloque2">
                <div class="bloque2__titulo"><h3>Opcion 4</h3></div>
                <div class="bloque2__descr"><p>Detalle de la opcion observada para el usuario actual. Esta opcion debe adecuarse a la resolucion de pantalla.</p></div>
            </div>
        </div>

    </div>
</section>

<footer class="footer">
    <p class="footer__texto">Frontend Store - Copyright 2022</p>
</footer>

</body>
</html>
