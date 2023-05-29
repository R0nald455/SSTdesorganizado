<?php require "./inc/session_start.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "./inc/head.php"; ?>
        <meta charset="UTF-8"> </meta>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Inicio | Inventarios SST CBA</title>
            <link rel="icon" href="./img/Sena_Colombia_logo.ico">
            <link href="./css/styles.css"  rel="StyleSheet">
            <link href="https://www.dafontfree.net/embed/enVyaWNoLXVibGtleC1idC11bHRyYS1ibGFjayZkYXRhLzI4L3ovMTQ5MDMxL1pVUkNIVUtFLnR0Zg" rel="stylesheet" type="text/css"/>
            <link href="..\css\carousel.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php

            if(!isset($_GET['vista']) || $_GET['vista']==""){
                $_GET['vista']="login";
            }


            if(is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista']!="login" && $_GET['vista']!="404"){

                /*== Cerrar sesion ==*/
                if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
                    include "./vistas/logout.php";
                    exit();
                }
                include "./vistas/".$_GET['vista'].".php";
                include "./inc/script.php";
            }else{
                if($_GET['vista']=="login"){
                    include "./vistas/login.php";
                }else{
                    include "./vistas/404.php";
                }
            }
        ?>
    </body>
</html>