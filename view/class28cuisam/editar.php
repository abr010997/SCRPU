<!DOCTYPE html>
<html>
<head>
	<title>Editar Ubicacion </title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <center>

    <h2>Editar Ubicacion: <?php echo $this->class28cuisam->getAtributo('PU28DSCUBIC');?> </h2>
  </center>
  <div class="container">
    <form action="?c=class28cuisam&m=editar" method="post">
      <div class="form-group">
        <label for="PU28IDUBIC">ID</label>
        <input type="text" class="form-control" id="PU28IDUBIC" name="PU28IDUBIC" value="<?php echo $this->class28cuisam->getAtributo('PU28IDUBIC');?>" readonly>
      </div>
      <div class="form-group">
        <label for="PU28DSCUBIC">Desripción</label>
        <input type="text" class="form-control" id="PU28DSCUBIC" name="PU28DSCUBIC" value="<?php echo $this->class28cuisam->getAtributo('PU28DSCUBIC');?> " >
      </div>
     
      <button type="submit" class="btn btn-success">Editar</button> 
      <a href="?c=class28cuisam&m=index" class="btn btn-default" role="button">Regresar</a>    
    </form>
  </div>
</body>
</html>