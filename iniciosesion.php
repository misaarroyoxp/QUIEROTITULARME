<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="shortcut icon" href="imagenes/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos inicio sesión.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

</head>

<body>

    <main class="main">
        <header>
            <nav>
                <nav>
                    <a href="index.html">Inicio</a>
                    <a href="iniciosesion.php">Iniciar Sesión</a>
                </nav>
            </nav>

            <section class="textos-headers">
                <h1>TechStore</h1>
                <h2>Expertos en Tecnología</h2>
            </section>


        </header>

        <div class="titulo">
            <h2>Inicio de Sesión</h2>
        </div>
        <div class="container-formulario">
        </div> <!-- /container -->

        <div class="container">

        <form class="form-signin" action="controlador/login.php" method="POST">
                <h2 class="Correo">Correo</h2>
                <input type="email" class="form-control" id="inputEmail" name="correo" placeholder="ejemplo@mail.cl" required autofocus></br>
                <h2 class="Contraseña">Contraseña</h2>
                <input type="password" class="form-control" id="inputPassword" name="pass" placeholder="********" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Iniciar Sesión</button>
            </form>

        </div>
    </main>

    <footer>
        <div class="contenedor-footer">
            <div class="contenedor-foo">
                <h4>Teléfono</h4>
                <p>+56-955456899</p>
            </div>
            <div class="contenedor-foo">
                <h4>email</h4>
                <p>tech@store.cl</p>
            </div>
            <div class="contenedor-foo">
                <h4>dirección</h4>
                <p>Av. Cordillera de los Andes 999</p>
            </div>
        </div>
    </footer>

</body>

</html>