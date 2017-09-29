<!DOCTYPE html>
<html>
<head>
	<title>Editar Tipo de Desarrollo</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <center>
 
    <h2>Editar Tipo de Desarrollo: <?php echo $this->class12tipdesec->getAtributo('PU12TIPODES');?> </h2>
  </center>
  <div class="container">
    <form action="?c=class12tipdesec&m=editar" method="post">
      <div class="form-group">
        <label for="PU12IDTDESEC">Código Tipo de Desarrollo:</label>
        <input type="text" class="form-control" id="PU12IDTDESEC" name="PU12IDTDESEC" value="<?php echo $this->class12tipdesec->getAtributo('PU12IDTDESEC');?>" readonly>
      </div>
      <div class="form-group">
        <label for="PU12TIPODES">Desripción Tipo de Desarrollo:</label>
        <input type="text" class="form-control" id="PU12TIPODES" name="PU12TIPODES" value="<?php echo $this->class12tipdesec->getAtributo('PU12TIPODES');?> " >
      </div>
     
      <button type="submit" class="btn btn-success">Editar</button> 
      <a href="?c=class12tipdesec&m=index" class="btn btn-default" role="button">Regresar</a>    
    </form>
  </div>
</body>
</html>
