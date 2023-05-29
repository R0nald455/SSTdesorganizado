<?php
$Server="localhost";
$Usuario="root";
$Password="8568712593";
$Database="db_5s";
$Conex=new mysqli($Server,$Usuario,$Password,$Database);

if ($Conex){
    echo "Conexion exitosa <br>";
}

$Preguntas = $_POST['Preguntas'];

$Clientes=$Preguntas;
        switch($Clientes){
                case 1:
                echo"¿Cuantas propiedades hay en clasificacion?<br>";
                $Consulta= "SELECT COUNT(*) FROM clasificacion c WHERE c.clasificacion IS NOT NULL";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                        $Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM);
                        echo"Hay un total de : ".$Filas[0];
                }else{
                        echo"Error";
                }
                break;
                case 2:
                echo"¿Cual es la media de las calificaciones de estandarizacion";
                $Consulta= "SELECT AVG(Calificacion_Est) FROM estandarización";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                        $Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM);
                        echo"Hay un total de consumo: ".$Filas[0];
                }else{
                        echo"Error";
                }
                break;
                case 3:
                echo"¿Cuales son las propiedades que estan en limpieza?<br>";
                $Consulta= "SELECT Limpieza FROM Limpieza'";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                        $Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM);
                        echo" ".$Filas[0] .$Filas[1] .$Filas[2] .$Filas[3] ;
                }else{
                        echo"Error";
                }
                break;
                case 4:
                echo"¿Cuales son las propiedades de todas las entidades?<br>";
                $Consulta= "SELECT clasificacion FROM clasificacion";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                    while($Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM)){
                        echo "Clasificación : " .$Filas[0],"<br>"; 
                        }
                }
                $Consulta= "SELECT disciplina FROM disciplina";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                    while($Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM)){
                        echo "Disciplina : ".$Filas[0],"<br>";
                        }
                }
                $Consulta= "SELECT Estandarización FROM estandarización";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                    while($Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM)){
                        echo "Estandarización : ".$Filas[0],"<br>";
                        }
                }
                $Consulta= "SELECT limpieza FROM limpieza";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                    while($Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM)){
                        echo "limpieza : ".$Filas[0],"<br>";
                        }
                }
                $Consulta= "SELECT Organización FROM organización";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                    while($Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM)){
                        echo "Organización : ".$Filas[0],"<br>";
                        }
                }
                break;
                case 5:
                echo"¿Cual es la media de las calificaciones de limpieza?<br>";
                $Consulta= "SELECT AVG(Calificacion_Lim) FROM Limpieza";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                        $Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM);
                        echo"".$Filas[0];
                }else{
                        echo"Error";
                }
                break;
                case 6:
                echo"¿Cual es el promedio de calificaciones de organizacion?<br>";
                $Consulta= "SELECT AVG(Calificacion_Org) FROM Organizacion";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                        $Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM);
                        echo"El ahorro total es : ".$Filas[0];
                }else{
                        echo"Error";
                }
                break;
                case  7:
                echo"¿Cual es el ID de la propiedad de estandarización 'Suciedad en áreas públicas'?<br>";
                $Consulta= "SELECT id_Est, Estandarización FROM estandarización  WHERE Estandarización='Suciedad en áreas públicas'";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                        $Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM);
                        echo"".$Filas[0];
                }else{
                        echo"Error";
                }
                break;
                case 8:
                echo"¿ Cual es el verificar de la propiedad de disciplina 'Orden en escritorios, sillas y repisas'?<br>";
                $Consulta= "SELECT disciplina, Verificar_Dis FROM disciplina WHERE disciplina='Orden en escritorios, sillas y repisas'";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                        $Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM);
                        echo"".$Filas[0];
                }else{
                        echo"Error";
                }
                break;
                case 9:
                echo"¿Cual es la calificacion de el id 1 y el id 4 en clasificacion?<br>";
                $Consulta= "SELECT calificacion_cla,id_cla from clasificacion WHERE id_cla=1 or id_cla=4";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                        $Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM);
                        echo"".$Filas[0],"<br>" .$Filas[1];
                }else{
                        echo"Error";
                }
                break;
                case 10:
                echo"Cuantos 'Si se cumple siempre' hay en la tabla organizacion <br>";
                $Consulta="SELECT count(Verificar_Org) EXISTEN from organización";
                $Resultado = mysqli_query($Conex,$Consulta);
                if ($Resultado){
                        $Filas=mysqli_fetch_array($Resultado,MYSQLI_NUM);
                        echo"".$Filas[0];
                }else{
                        echo"Error";
                }
                break;
            }

?>