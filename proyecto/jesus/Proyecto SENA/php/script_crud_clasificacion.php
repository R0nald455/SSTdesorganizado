<?php

$Server="localhost";
$Usuario="root";
$Password="8568712593";
$Database="db_5s";
$conex=new mysqli($Server,$Usuario,$Password,$Database);

$tabla_clasificacion = "clasificacion";

if ($conex){
    echo "Conexion exitosa <br>";
} else {
    echo "No se ha podido conectar <br>";
}

if(isset($_POST['btn_consultar']))
{

    $id_cla=$_POST["id_Cla"];

    $existe=0;

    if($id_cla == "")
    {
        echo "El id esta vacio, por favor escriba un id";
    } 
    else {
        echo "Presiono el boton consultar <br>";
    $resultados = mysqli_query($conex, "SELECT * FROM $tabla_clasificacion WHERE id_Cla = '$id_cla'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            echo $consulta['id_Cla']."<br>";
            echo $consulta['Clasificacion']."<br>";
            echo $consulta['Verificar_Cla']."<br>";
            echo $consulta['Calificacion_Cla']."<br>";
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
    $id_cla=$_POST["id_Cla"];
    $clasificacion=$_POST["Clasificacion"];
    $verificar_cla=$_POST["Verificar_Cla"];
    $calificacion_cla=$_POST["Calificacion_Cla"];

    if($id_cla == "" || $clasificacion == "" || $verificar_cla == "" || $calificacion_cla == "")
    {
        echo "Los campos anteriores son obligatorios, por favor insertarlos";
    } 
    else {
        echo "Presiono el boton registrar <br>";
        
        mysqli_query($conex, "INSERT INTO $tabla_clasificacion (id_Cla, Clasificacion, Verificar_Cla, Calificacion_Cla) values ($id_cla, $clasificacion, $verificar_cla, $calificacion_cla)");
       
    }
}

if(isset($_POST['btn_actualizar']))
{
    echo "Presiono el boton actualizar <br>";

    $id_cla=$_POST["id_Cla"];
    $clasificacion=$_POST["Clasificacion"];
    $verificar_cla=$_POST["Verificar_Cla"];
    $calificacion_cla=$_POST["Calificacion_Cla"];

    if($id_cla == "" or $clasificacion == "" or $verificar_cla == "" or $calificacion_cla == "")
    {
        echo "Los campos anteriores son obligatorios, por favor insertarlos";
    } 
    else { 
        $existe = 0;
        $resultados = mysqli_query($conex, "SELECT * FROM $tabla_clasificacion WHERE id_Cla = '$id_cla'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";
        } else {
            $_UPDATE_SQL = "UPDATE $tabla_clasificacion SET id_Cla = '$id_cla', Clasificacion = '$clasificacion', Verificar_Cla = '$verificar_cla', Calificacion_Cla = '$calificacion_cla' WHERE id_Cla = '$id_cla' ";
            mysqli_query($conex, $_UPDATE_SQL);
            echo "Actualizacion correcta";
        }

    }

}

if(isset($_POST['btn_eliminar']))
{
    echo "Presiono el boton eliminar <br>";

    $id_cla=$_POST["id_Cla"];

    $existe=0;

    if($id_cla == "")
    {
        echo "El id esta vacio, por favor escriba un id";
    } 
    else {
    $resultados = mysqli_query($conex, "SELECT * FROM $tabla_clasificacion WHERE id_Cla = '$id_cla'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";

        } else {
            $_DELETE_SQL = "DELETE FROM $tabla_clasificacion WHERE id_Cla = '$id_cla'";
            mysqli_query($conex, $_DELETE_SQL);
        }
    }
}




?>