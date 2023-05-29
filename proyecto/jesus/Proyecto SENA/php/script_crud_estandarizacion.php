<?php

$Server="localhost";
$Usuario="root";
$Password="8568712593";
$Database="db_5s";
$conex=new mysqli($Server,$Usuario,$Password,$Database);

$tabla_estandarizacion = "estandarizacion";

if ($conex){
    echo "Conexion exitosa <br>";
} else {
    echo "No se ha podido conectar <br>";
}

if(isset($_POST['btn_consultar']))
{

    $id_est=$_POST["id_Est"];

    $existe=0;

    if($id_est == "")
    {
        echo "El id esta vacio, por favor escriba un id";
    } 
    else {
        echo "Presiono el boton consultar <br>";
    $resultados = mysqli_query($conex, "SELECT * FROM $tabla_estandarizacion WHERE id_Est = '$id_est'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            echo $consulta['id_Est']."<br>";
            echo $consulta['Estandarizacion']."<br>";
            echo $consulta['Verificar_Est']."<br>";
            echo $consulta['Calificacion_Est']."<br>";
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";
        }
    }

    
}

if(isset($_POST['btn_registrar']))
{
    $id_est=$_POST["id_Est"];
    $estandarizacion=$_POST["Estandarizacion"];
    $verificar_est=$_POST["Verificar_Est"];
    $calificacion_est=$_POST["Calificacion_Est"];

    if($id_est == "" || $estandarizacion == "" || $verificar_est == "" || $calificacion_est == "")
    {
        echo "Los campos anteriores son obligatorios, por favor insertarlos";
    } 
    else {
        echo "Presiono el boton registrar <br>";
        
        mysqli_query($conex, "INSERT INTO $tabla_estandarizacion (id_Est, Estandarización, Verificar_Est, Calificacion_Est) values ($id_est, $estandarizacion, $verificar_est, $calificacion_est)");
       
    }
}

if(isset($_POST['btn_actualizar']))
{
    echo "Presiono el boton actualizar <br>";

    $id_est=$_POST["id_Est"];
    $estandarizacion=$_POST["Estandarización"];
    $verificar_est=$_POST["Verificar_Est"];
    $calificacion_est=$_POST["Calificacion_Est"];

    if($id_est == "" or $estandarizacion == "" or $verificar_est == "" or $calificacion_est == "")
    {
        echo "Los campos anteriores son obligatorios, por favor insertarlos";
    } 
    else { 
        $existe = 0;
        $resultados = mysqli_query($conex, "SELECT * FROM $tabla_estandarizacion WHERE id_Est = '$id_est'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";
        } else {
            $_UPDATE_SQL = "UPDATE $tabla_estandarizacion SET id_Est = '$id_est', Estandarización = '$estandarizacion', Verificar_Est = '$verificar_est', Calificacion_Est = '$calificacion_est' WHERE id_Est = '$id_est' ";
            mysqli_query($conex, $_UPDATE_SQL);
            echo "Actualizacion correcta";
        }

    }

}

if(isset($_POST['btn_eliminar']))
{
    echo "Presiono el boton eliminar <br>";

    $id_est=$_POST["id_Est"];

    $existe=0;

    if($id_est == "")
    {
        echo "El id esta vacio, por favor escriba un id";
    } 
    else {
    $resultados = mysqli_query($conex, "SELECT * FROM $tabla_estsificacion WHERE id_Est = '$id_est'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";

        } else {
            $_DELETE_SQL = "DELETE FROM $tabla_estandarizacion WHERE id_Est = '$id_est'";
            mysqli_query($conex, $_DELETE_SQL);
        }
    }
}




?>