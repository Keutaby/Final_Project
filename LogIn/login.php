<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Inicio de Sesion</title>
</head>
<body>
    <header>
        <a href="/Index/index.html" class="logo"><img src="/img/SwimU.PNG" alt="SwimU Logo"></a>

        <nav class="navbar">
            <a href="/About/carrusel.html">About</a>
            <a href="/Comprar/carrito.html">Comprar</a>
            <a href="/Locaciones/locacion.html">Locaciones</a>
            <a href="/LogIn/login.php">Login</a>
        </nav>
    </header>

    <form action="login_iniciarsesion.php" method="post">
        <h1>INICIO SESION</h1>
        <hr>
        <?php
            if(isset($GET['error'])){
                
        ?>

        <p id="error">
            <?php
                echo $_GET['error']
            ?>
        </p>

            <?php
                }
            ?>
            <br>
            <hr>

            <i class="fa-solid fa-user"></i>
            <label for="">Usuario</label>
            <input type="text" name="Usuario" placeholder="10 caracteres" maxlength="10" required>

            <i class="fa-solid fa-unlock"></i>
            <label for="">Clave</label>
            <input type="text" name="Clave" placeholder="15 caracteres" maxlength="15" required>
                <button type="submit">Iniciar Sesion</button>
                <a href="/Registro/registrar.php" target="_blank">Crear Cuenta</a>
    </form>

    <footer>
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="/About/carrusel.html">About</a>
                <a href="/Comprar/carrito.html">Comprar</a>
                <a href="/Locaciones/locacion.html">Locaciones</a>
                <a href="/LogIn/login.php">Login</a>
            </div>

            <div class="box">
            <h3>Extra Links</h3>
                <a href="https://www.arenasport.com/en_us/" target="_blank">Arena</a>
                <a href="https://us.speedo.com" target="_blank">Speedo</a>
                <a href="https://www.swimoutlet.com" target="_blank">SwimOutlet</a>
            </div>

            <div class="box">
                <h3>Locaciones</h3>
                    <a href="https://www.google.com/maps/place/13501+Jason+Crandall+Dr,+El+Paso,+TX+79938/@31.8021819,-106.2417296,17z/data=!3m1!4b1!4m6!3m5!1s0x86e74661906bcab9:0xc5a8a30f3b166402!8m2!3d31.8021774!4d-106.2391493!16s%2Fg%2F11f2wp1dl4?entry=ttu" target="_blank">Eastside Natatorium</a>
                    <a href="https://www.google.com/maps/place/8100+Independence+Dr,+El+Paso,+TX+79907/@31.7111063,-106.367632,17z/data=!3m1!4b1!4m6!3m5!1s0x86e75cc15f2d9d97:0x755363dffcbb61a7!8m2!3d31.7111018!4d-106.3650517!16s%2Fg%2F11b8v7xrpd?entry=ttu" target="_blank">Cowan</a>
                    <a href="https://www.google.com/maps/place/11600+Vista+Del+Sol+Dr,+El+Paso,+TX+79936/@31.7509581,-106.3015989,16.69z/data=!4m6!3m5!1s0x86e7447e36c7135f:0x4477cee79fa13bec!8m2!3d31.7507143!4d-106.2980958!16s%2Fg%2F11bw440sp6?entry=ttu" target="_blank">Marty Robins</a>
                    <a href="https://www.google.com/maps/place/5301+Salem+Dr,+El+Paso,+TX+79924/@31.9200989,-106.4230619,17z/data=!3m1!4b1!4m6!3m5!1s0x86e753e884766c71:0x7b165196017c10b1!8m2!3d31.9200944!4d-106.4204816!16s%2Fg%2F11c43y8kk4?entry=ttu" target="_blank">Veterans</a>
            </div>

                <div class="box">
                <h3>Siguenos en:</h3>
                    <a href="https://www.facebook.com/swimoutlet/" target="_blank">Facebook</a>
                    <a href="https://www.instagram.com/SwimOutlet/" target="_blank">Instagram</a>
                    <a href="https://www.tiktok.com/@swimoutlet/" target="_blank">Tik Tok</a>
                </div>
        </div>

        <div class="credit">Creado por <span>Abigail Keuten Contreras</span> | Derechos Reservados</div>
    </footer>
</body>
</html>