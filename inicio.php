<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="style.css">
	<?php require_once "scripts.php"; ?>
</head>
<body>			
	<header>
        <img src="img.jpg" alt="">
        <a href="#" class="logo">
            <span>Di</span>sap</a>
            <input type="checkbox" id="menu-bar">
            <label for="menu-bar" class="fa fa-bars"></label>
            <nav class="navbar">
                <a href="#inicio">inicio</a>
                <a href="libros/index.html">Libros</a>
                <a href="#acerca de">acerca de</a>
                <a href="#opiniones">opiniones</a>
                <a href="#contactos">contactos</a>
                <a href="php/salir.php" class="btn btn-info">Salir de la Biblioteca</a>
            </nav>
    </header>


    <main class="bg_animate">
        <div class="header_nav">
        <section class="banner contenedor">
            <secrion class="banner_title">
                <h2>Bienvenido <br> a Disap</h2>
                <a href="libros/index.html" class="llamanos">Explorar!</a>
            </secrion>
            <div class="banner_img">
                <img src="img/chico-estudiante-volando-cartilla-magica-abc-libro_3446-677.jpg" alt="">
            </div>
        </section>

        <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
        </div>
    </main>
				</div>
			</div>
		</div>
	</div>
</body>

<style>

/* Hoja de estilo css */

	:root{
    --B: #ffffff;
    --N: #000000;
    --degradado:linear-gradiet(90deg, var(--N),var(--B));
}

*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    border: none;
    text-transform: capitalize;
}

/* Inicio de los estilos de la barra de nav. y responsive */

html{
    font-size: 62.4%;
    overflow: hidden;
}

body{
    background: white;
}

header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    padding: 2rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
}

img{
    width: 60px;
    height: auto;
    display: block;
    border-radius: 50%;
    box-shadow: 3px 3px 0px #3b8a0d;
}

header .logo{
    font-size: 2rem;
    color: var(--B);
}

header .logo span{
    color: var(--N);
}

header .navbar a{
    font-size: 1.8rem;
    margin-left: 2rem;
    color: var(--B);
}

header .navbar a:hover{
    color: var(--N);
}

header input{
    display: none;
}

header label{
    font-size: 3rem;
    color: var(--B);
    cursor: pointer;
    visibility: hidden;
    opacity: 0;
}

@media(max-width:1200px){
    html{
        font-size: 55%;
    }
}

@media(max-width:768px){
    header label{
        visibility: visible;
        opacity: 1;
    }

    header .navbar{
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: linear-gradient(to right, #00985e, #1892c2);
        padding: 1rem 2rem;
        border-top: .1rem solid rgba(0, 0, 0, .2);
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        transform-origin: top;
        transform: scaleY(0);
        opacity: 0;
    }

    header .navbar a{
        display: block;
        margin: 2rem 0;
        font-size: 2rem;
    }

    header input:checked ~ .navbar{
        transform: scaleY(1);
        opacity: 1;
    }

    header input:checked ~ label::before{
        content: '\f00d';
    }
}

@media(max-width:450px){
    html{
        font-size: 49%;
    }
}

/* Fin de los estilos de la barra de nav. y responsive */

.contenedor{
    width: 100%;
    max-width: 1200px;
    margin: 90px;
    padding: 20px;
}

.bg_animate{
    width: 100%;
    height: 100vh;
    background: linear-gradient(to right, #00985e, #1892c2);
    position: absolute;
    overflow: hidden;
}

.banner{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
}

.banner_title h2{
    color: #fff;
    font-size: 60px;
    font-weight: 800;
    margin-bottom: 20px;
}

.banner_title .llamanos{
    color: #fff;
    font-size: 20px;
    text-decoration: none;
    display: inline-block;
    background: #0a7cff6c;
    padding: 20px;
}

.banner_img{
    animation: movimiento 2.5s linear infinite;
}

.banner_img img{
    width: 65%;
    display: block;
    border-radius: 50%;
    box-shadow: 5px 5px 0px #13c2e0;
    max-width: 100%;
}

/* burbujas */

.burbuja{
    border-radius: 50%;
    background: #fff;
    opacity: .3;

    position: absolute;
    bottom: -150;
    
    animation: burbujas 3s linear infinite ;
}

.burbuja:nth-child(1){
    width: 80px;
    height: 80px;
    left: 5%;
    animation-duration: 3s;
    animation-delay: 3s;
}

.burbuja:nth-child(2){
    width: 100px;
    height: 100px;
    left: 35%;
    animation-duration: 3s;
    animation-delay: 5s;
}

.burbuja:nth-child(3){
    width: 20px;
    height: 20px;
    left: 15%;
    animation-duration: 1.5s;
    animation-delay: 7s;
}

.burbuja:nth-child(4){
    width: 50px;
    height: 50px;
    left: 90%;
    animation-duration: 6s;
    animation-delay: 3s;
}

.burbuja:nth-child(5){
    width: 70px;
    height: 70px;
    left: 65%;
    animation-duration: 3s;
    animation-delay: 1s;
}

.burbuja:nth-child(6){
    width: 20px;
    height: 20px;
    left: 50%;
    animation-duration: 4s;
    animation-delay: 5s;
}

.burbuja:nth-child(7){
    width: 20px;
    height: 20px;
    left: 50%;
    animation-duration: 4s;
    animation-delay: 5s;
}

.burbuja:nth-child(8){
    width: 100;
    height: 100px;
    left: 52%;
    animation-duration: 5s;
    animation-delay: 5s;
}

.burbuja:nth-child(9){
    width: 65px;
    height: 65px;
    left: 51%;
    animation-duration: 3s;
    animation-delay: 2s;
}

.burbuja:nth-child(10){
    width: 40px;
    height: 40px;
    left: 35%;
    animation-duration: 3s;
    animation-delay: 4s;
}


@keyframes burbujas{
    0%{
        bottom: 0;
        opacity: 0;
    }
    30%{
        transform: translateX(30px);
    }
    50%{
        opacity: .4;
    }
    100%{
        bottom: 100vh;
        opacity: 0;
    }
}

@keyframes movimiento{
    0%{
        transform: translateY(0);
    }
    50%{
        transform: translateY(30px);
    }
    100%{
        transform: translateY(0);
    }
}
</style>
</html>

<?php
} else {
	header("location:index.php");
	}
 ?>
