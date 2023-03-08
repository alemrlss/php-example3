<!doctype html>
<html>
<head>
<title>Archivos - Alejandro Morales</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>

</head>
<body>

<div class="container">

    <h2 align='center'>Manejo de Archivos</h2>
    <hr style="margin-top:20px;margin-bottom: 20px;">

 
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 align='center'>Carga de Archivos</h4>
      </div>
      <div class="panel-body">
      
          <form method="POST" action="CargarFicheros.php" enctype="multipart/form-data">
      <div class="form-group">
      <label class="btn btn-info" for="my-file-selector" style="margin-left:35%">
                <input required="" type="file" name="file" id="exampleInputFile">
              </label>
              

<hr>
            <div style="margin-left:30%">
            <button class="btn btn-success" type="submit">Subir Archivo</button>
          <?php include('./modal_listar.php')?>
            </div>
          </form>
        </div>
        <div class="col-lg-6"> </div>
      </div>
    </div>
  

    <div class="panel panel-info">

      <div class="panel-heading ">
        <h3 class="panel-title" align='center'>Archivos almacenados</h3>
      </div>
      <div class="panel-body">
   
<table class="table">
<thead>
    <tr>
      <th width="6%"></th>
      <th width="30%">Nombre del Archivo</th>
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
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>

      <td><a title="Ver Archivo" href="subidas/<?php echo $archivos[$i]; ?> " target="_blank" style="color: green; font-size:18px;"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>

      <td><a title="Descargar Archivo" href="subidas/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
      <td><a title="Eliminar Archivo" href="Eliminar.php?name=subidas/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Estas seguro de eliminar el archivo? será permanente!');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
    </tr>
 <?php }?> 

  </tbody>
</table>
</div>
</div>

  </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</body>
</html>
