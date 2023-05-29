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
<div class="container"><br><br>
    <div class="content"> </div>
    <div class="panel ">
      <div class="panel-heading">
        <h3 class="panel-title">Cargar Normas</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-6">
          <form method="POST" action="CargarFicheros.php" enctype="multipart/form-data">
<div class="form-group">
              <label class="btn btn-warning" for="my-file-selector">
                <input required="" type="file" name="file" id="exampleInputFile">
              </label>
              
</div>
          <button class="btn btn-warning" type="submit">Cargar</button>
          </form>
        </div>
        <div class="col-lg-6"> </div>
      </div>
    </div>
  
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
      <th width="10%">Eliminar</th>
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
      <td><a title="Eliminar Archivo" href="Eliminar.php?name=subidas/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
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
