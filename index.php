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
    <a class="navegacion__enlace navegacion__enlace--activo" href="./">Tienda</a>
    <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
</nav>

<main class="contenedor">
    <h1>Nuestros Productos</h1>

    <div class="grid">
        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/1.jpg" alt="Polera Vue">
                <div class="producto__informacion">
                    <p class="producto__nombre">VueJS</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/2.jpg" alt="Polera Angular">
                <div class="producto__informacion">
                    <p class="producto__nombre">Angular JS</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/3.jpg" alt="Polera React">
                <div class="producto__informacion">
                    <p class="producto__nombre">React JS</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/4.jpg" alt="Polera Redux">
                <div class="producto__informacion">
                    <p class="producto__nombre">Redux</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/5.jpg" alt="Polera Node">
                <div class="producto__informacion">
                    <p class="producto__nombre">Node JS</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/6.jpg" alt="Polera SASS">
                <div class="producto__informacion">
                    <p class="producto__nombre">SASS</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/7.jpg" alt="Polera HTML5">
                <div class="producto__informacion">
                    <p class="producto__nombre">HTL5</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/8.jpg" alt="Polera Github">
                <div class="producto__informacion">
                    <p class="producto__nombre">Github</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/9.jpg" alt="Polera Bulma">
                <div class="producto__informacion">
                    <p class="producto__nombre">BulmaCSS</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/10.jpg" alt="Polera TypeScript">
                <div class="producto__informacion">
                    <p class="producto__nombre">TypeScript</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/11.jpg" alt="Polera Drupal">
                <div class="producto__informacion">
                    <p class="producto__nombre">Drupal</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/12.jpg" alt="Polera JavaScript">
                <div class="producto__informacion">
                    <p class="producto__nombre">JavaScript</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/13.jpg" alt="Polera GraphQL">
                <div class="producto__informacion">
                    <p class="producto__nombre">GrphQL</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="producto">
            <a href="producto.php">
                <img class="producto__imagen" src="img/14.jpg" alt="Polera WordPress">
                <div class="producto__informacion">
                    <p class="producto__nombre">WordPress</p>
                    <p class="producto__precio">$25</p>
                </div>
            </a>
        </div>

        <div class="grafico grafico__camisas"></div>
        <div class="grafico grafico__node"></div>

    </div>
</main>

<footer class="footer">
    <p class="footer__texto">Frontend Store - Copyright 2022</p>
</footer>

</body>
</html>
