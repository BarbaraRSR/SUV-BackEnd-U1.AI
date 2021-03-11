<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
    <meta charset="utf-8">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>SUV: Back-End</title>
</HEAD>
<BODY>
<DIV class="cont">


<h1>Lenguajes de programación Back End</h1>
<p><b>Unidad 1.</b> Cliente-Servidor con PHP
</p>

    <DIV class="actividad">
        <h3>Actividad Integradora. Configurando y operando el inicio de sesión.</h3>
        <!-- PÁGINA PROTEGIDA -->

        <?php session_start(); /* Inicia sesión */
        if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
        }
        ?>
        
        <p>¡Has ingresado a una página protegida!.</p>
        
        <p><img src="https://cgestiona.com/files/1/page-contents/ingresar%20informaci%C3%B3n%20a%20T-Registro.jpg" alt="candado"></p>

        <p><a href="logout.php">Da clic aquí</a> para salir.</p>
        <br>


    </DIV>
    
    <p><b>Fuentes de consulta</b>
    <ul>
        <li>Admin (2014). <i>PHP login without using database</i> [en línea]. En w3schools.in [Consulta: 11-mar-2021].<br>
        Recuperado de: <a href="https://www.w3schools.in/php-script/php-login-without-using-database/">https://www.w3schools.in/php-script/php-login-without-using-database/</a></li>
    </ul>
    </p>


    <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>
    <b>Código: </b>394485606<br/>
    <b>Asesor: </b>José Francisco Jafet Pérez López<br/>
    <b>Fecha: </b>13 de marzo 2021</p>

</DIV>

</BODY>
</HTML>