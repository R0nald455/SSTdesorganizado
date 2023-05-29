<?php

$Server="localhost";
$Usuario="root";
$Password="8568712593";
$Database="db_5s";
$conex=new mysqli($Server,$Usuario,$Password,$Database);

$tabla_Limpieza = "limpieza";

if ($conex){
    echo "Conexion exitosa <br>";
} else {
    echo "No se ha podido conectar <br>";
}

if(isset($_POST['btn_consultar']))
{

    $id_Lim=$_POST["id_Lim"];

    $existe=0;

    if($id_Lim == "")
    {
        echo "El id esta vacio, por favor escriba un id";
    } 
    else {
        echo "Presiono el boton consultar <br>";
    $resultados = mysqli_query($conex, "SELECT * FROM $tabla_Limpieza WHERE id_Lim = '$id_Lim'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            echo $consulta['id_Lim']."<br>";
            echo $consulta['Limpieza']."<br>";
            echo $consulta['Verificar_Lim']."<br>";
            echo $consulta['Calificacion_Lim']."<br>";
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
    $id_Lim=$_POST["id_Lim"];
    $Limpieza=$_POST["Limpieza"];
    $verificar_Lim=$_POST["Verificar_Lim"];
    $calificacion_Lim=$_POST["Calificacion_Lim"];

    if($id_Lim == "" || $Limpieza == "" || $verificar_Lim == "" || $calificacion_Lim == "")
    {
        echo "Los campos anteriores son obligatorios, por favor insertarlos";
    } 
    else {
        echo "Presiono el boton registrar <br>";
        
        mysqli_query($conex, "INSERT INTO $tabla_Limpieza (id_Lim, Limpieza, Verificar_Lim, Calificacion_Lim) values ($id_Lim, $Limpieza, $verificar_Lim, $calificacion_Lim)");
       
    }
}

if(isset($_POST['btn_actualizar']))
{
    echo "Presiono el boton actualizar <br>";

    $id_Lim=$_POST["id_Lim"];
    $Limpieza=$_POST["Limpieza"];
    $verificar_Lim=$_POST["Verificar_Lim"];
    $calificacion_Lim=$_POST["Calificacion_Lim"];

    if($id_Lim == "" or $Limpieza == "" or $verificar_Lim == "" or $calificacion_Lim == "")
    {
        echo "Los campos anteriores son obligatorios, por favor insertarlos";
    } 
    else { 
        $existe = 0;
        $resultados = mysqli_query($conex, "SELECT * FROM $tabla_Limpieza WHERE id_Lim = '$id_Lim'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";
        } else {
            $_UPDATE_SQL = "UPDATE $tabla_Limpieza SET id_Lim = '$id_Lim', Limpieza = '$Limpieza', Verificar_Lim = '$verificar_Lim', Calificacion_Lim = '$calificacion_Lim' WHERE id_Lim = '$id_Lim' ";
            mysqli_query($conex, $_UPDATE_SQL);
            echo "Actualizacion correcta";
        }

    }

}

if(isset($_POST['btn_eliminar']))
{
    echo "Presiono el boton eliminar <br>";

    $id_Lim=$_POST["id_Lim"];

    $existe=0;

    if($id_Lim == "")
    {
        echo "El id esta vacio, por favor escriba un id";
    } 
    else {
    $resultados = mysqli_query($conex, "SELECT * FROM $tabla_Limpieza WHERE id_Lim = '$id_Lim'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";

        } else {
            $_DELETE_SQL = "DELETE FROM $tabla_Limpieza WHERE id_Lim = '$id_Lim'";
            mysqli_query($conex, $_DELETE_SQL);
        }
    }
}




?>