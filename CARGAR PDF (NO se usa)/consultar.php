<!doctype html>
<html>
<head>
<title>Cargar Ficheros</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >


<!-- Latest compiled and minified JavaScript -->
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
<style>
.navbar {
	position: relative;
	min-height: 50px;
	margin-bottom: 5px;
}
</style>
</head>
<body>

  
<!--tabla-->
    <div class="panel ">
      <div class="panel-heading">
        <h3 class="panel-title">Normas Disponibles</h3>
      </div>
      <div class="panel-body">
   
<table class="table">
  <thead>
    <tr>
      <th width="70%">Norma</th>
      <th width="13%">Descargar</th>
    </tr>
  </thead>
  <tbody>
<?php
$archivos = scandir("subidas");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;
?>
<p>  
 </p>
         
    <tr>
      <td><?php echo $archivos[$i]; ?></td>
      <td><a title="Descargar Archivo" href="subidas/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: orange; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
    </tr>
 <?php }?> 

  </tbody>
</table>
</div>
</div>
  </div>
</div>
</body>
</html>