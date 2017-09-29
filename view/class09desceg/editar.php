<!DOCTYPE html>
<html>
<head>
	<title>Editar Espacio Geográfico</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <center>

    <h2>Editar Espacio Geográfico: <?php echo $this->class09desceg->getAtributo('PU09DESCREG');?> </h2>
  </center>
  <div class="container">
    <form action="?c=class09desceg&m=editar" method="post">
      <div class="form-group">
        <label for="PU09IDDEG">ID Espacio Geográfico</label>
        <input type="text" class="form-control" id="PU09IDDEG" name="PU09IDDEG" value="<?php echo $this->class09desceg->getAtributo('PU09IDDEG');?>" readonly>
      </div>
      <div class="form-group">
        <label for="PU09DESCREG">Desripción Espacio Geográfico</label>
        <input type="text" class="form-control" id="PU09DESCREG" name="PU09DESCREG" value="<?php echo $this->class09desceg->getAtributo('PU09DESCREG');?> " >
      </div>
     
      <button type="submit" class="btn btn-success">Editar</button> 
      <a href="?c=class09desceg&m=index" class="btn btn-default" role="button">Regresar</a>    
    </form>
  </div>
</body>
</html>