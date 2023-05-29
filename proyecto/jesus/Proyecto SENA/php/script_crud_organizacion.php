<?php

$Server="localhost";
$Usuario="root";
$Password="8568712593";
$Database="db_5s";
$conex=new mysqli($Server,$Usuario,$Password,$Database);

$tabla_Organizacion = "organizacion";

if ($conex){
    echo "Conexion exitosa <br>";
} else {
    echo "No se ha podido conectar <br>";
}

if(isset($_POST['btn_consultar']))
{

    $id_Org=$_POST["id_Org"];

    $existe=0;

    if($id_Org == "")
    {
        echo "El id esta vacio, por favor escriba un id";
    } 
    else {
        echo "Presiono el boton consultar <br>";
    $resultados = mysqli_query($conex, "SELECT * FROM $tabla_Organizacion WHERE id_Org = '$id_Org'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            echo $consulta['id_Org']."<br>";
            echo $consulta['Organización']."<br>";
            echo $consulta['Verificar_Org']."<br>";
            echo $consulta['Calificacion_Org']."<br>";
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
    $id_Org=$_POST["id_Org"];
    $Organizacion=$_POST["Organizacion"];
    $verificar_Org=$_POST["Verificar_Org"];
    $calificacion_Org=$_POST["Calificacion_Org"];

    if($id_Org == "" || $Organizacion == "" || $verificar_Org == "" || $calificacion_Org == "")
    {
        echo "Los campos anteriores son obligatorios, por favor insertarlos";
    } 
    else {
        echo "Presiono el boton registrar <br>";
        
        mysqli_query($conex, "INSERT INTO $tabla_Organizacion (id_Org, Organización, Verificar_Org, Calificacion_Org) values ($id_Org, $Organizacion, $verificar_Org, $calificacion_Org)");
       
    }
}

if(isset($_POST['btn_actualizar']))
{
    echo "Presiono el boton actualizar <br>";

    $id_Org=$_POST["id_Org"];
    $Organizacion=$_POST["Organización"];
    $verificar_Org=$_POST["Verificar_Org"];
    $calificacion_Org=$_POST["Calificacion_Org"];

    if($id_Org == "" or $Organizacion == "" or $verificar_Org == "" or $calificacion_Org == "")
    {
        echo "Los campos anteriores son obligatorios, por favor insertarlos";
    } 
    else { 
        $existe = 0;
        $resultados = mysqli_query($conex, "SELECT * FROM $tabla_Organizacion WHERE id_Org = '$id_Org'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";
        } else {
            $_UPDATE_SQL = "UPDATE $tabla_Organizacion SET id_Org = '$id_Org', Organización = '$Organizacion', Verificar_Org = '$verificar_Org', Calificacion_Org = '$calificacion_Org' WHERE id_Org = '$id_Org' ";
            mysqli_query($conex, $_UPDATE_SQL);
            echo "Actualizacion correcta";
        }

    }

}

if(isset($_POST['btn_eliminar']))
{
    echo "Presiono el boton eliminar <br>";

    $id_Org=$_POST["id_Org"];

    $existe=0;

    if($id_Org == "")
    {
        echo "El id esta vacio, por favor escriba un id";
    } 
    else {
    $resultados = mysqli_query($conex, "SELECT * FROM $tabla_Organizacion WHERE id_Org = '$id_Org'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";

        } else {
            $_DELETE_SQL = "DELETE FROM $tabla_Organizacion WHERE id_Org = '$id_Org'";
            mysqli_query($conex, $_DELETE_SQL);
        }
    }
}




?>