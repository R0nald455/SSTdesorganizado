<?php

$Server="localhost";
$Usuario="root";
$Password="8568712593";
$Database="db_5s";
$conex=new mysqli($Server,$Usuario,$Password,$Database);

$tabla_disciplina = "disciplina";

if ($conex){
    echo "Conexion exitosa <br>";
} else {
    echo "No se ha podido conectar <br>";
}

if(isset($_POST['btn_consultar']))
{

    $id_dis=$_POST["id_Dis"];

    $existe=0;

    if($id_dis == "")
    {
        echo "El id esta vacio, por favor escriba un id";
    } 
    else {
        echo "Presiono el boton consultar <br>";
    $resultados = mysqli_query($conex, "SELECT * FROM $tabla_disciplina WHERE id_Dis = '$id_dis'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            echo $consulta['id_Dis']."<br>";
            echo $consulta['Disciplina']."<br>";
            echo $consulta['Verificar_Dis']."<br>";
            echo $consulta['Calificacion_Dis']."<br>";
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
    $id_dis=$_POST["id_Dis"];
    $disciplina=$_POST["Disciplina"];
    $verificar_dis=$_POST["Verificar_Dis"];
    $calificacion_dis=$_POST["Calificacion_Dis"];

    if($id_dis == "" || $disciplina == "" || $verificar_dis == "" || $calificacion_dis == "")
    {
        echo "Los campos anteriores son obligatorios, por favor insertarlos";
    } 
    else {
        echo "Presiono el boton registrar <br>";
        
        mysqli_query($conex, "INSERT INTO $tabla_disciplina (id_Dis, Disciplina, Verificar_Dis, Calificacion_Dis) values ($id_dis, $disciplina, $verificar_dis, $calificacion_dis)");
       
    }
}

if(isset($_POST['btn_actualizar']))
{
    echo "Presiono el boton actualizar <br>";

    $id_dis=$_POST["id_Dis"];
    $disciplina=$_POST["Disciplina"];
    $verificar_dis=$_POST["Verificar_Dis"];
    $calificacion_dis=$_POST["Calificacion_Dis"];

    if($id_dis == "" or $disciplina == "" or $verificar_dis == "" or $calificacion_dis == "")
    {
        echo "Los campos anteriores son obligatorios, por favor insertarlos";
    } 
    else { 
        $existe = 0;
        $resultados = mysqli_query($conex, "SELECT * FROM $tabla_disciplina WHERE id_Dis = '$id_dis'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";
        } else {
            $_UPDATE_SQL = "UPDATE $tabla_disciplina SET id_Dis = '$id_dis', disciplina = '$disciplina', Verificar_Dis = '$verificar_dis', Calificacion_Dis = '$calificacion_dis' WHERE id_Dis = '$id_dis' ";
            mysqli_query($conex, $_UPDATE_SQL);
            echo "Actualizacion correcta";
        }

    }

}

if(isset($_POST['btn_eliminar']))
{
    echo "Presiono el boton eliminar <br>";

    $id_dis=$_POST["id_Dis"];

    $existe=0;

    if($id_dis == "")
    {
        echo "El id esta vacio, por favor escriba un id";
    } 
    else {
    $resultados = mysqli_query($conex, "SELECT * FROM $tabla_disciplina WHERE id_Dis = '$id_dis'");
        while ($consulta = mysqli_fetch_array($resultados))
        {
            $existe++;
        }
        if($existe == 0)
        {
            echo "El ID no exite, por favor ingrese uno que si exista";

        } else {
            $_DELETE_SQL = "DELETE FROM $tabla_disciplina WHERE id_Dis = '$id_dis'";
            mysqli_query($conex, $_DELETE_SQL);
        }
    }
}




?>