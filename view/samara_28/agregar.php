<!DOCTYPE html>
<html>
<head>
  <title>Nuevo Ubicacion Samara</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
  <center>
    <h2>Agregar Ubicacion Samara</h2>
  </center>
  <div class="container">
    <form action="?c=samara_28&m=agregar" method="post">
    
      <div class="form-group">
        <label for="PU28IDUBIC">ID UBICACION</label>
        <input type="text" class="form-control" id="PU28IDUBIC" name="PU28IDUBIC">
      </div>

      <div class="form-group">
        <label for="PU28DSCUBIC">DESCRIPCION</label>
        <input type="text" class="form-control" id="PU28DSCUBIC" name="PU28DSCUBIC">
      </div>
      <button type="submit" class="btn btn-success">Guardar</button> 
      <a href="?c=samara_28&m=index" class="btn btn-default" role="button">Regresar</a>    
     </form>
   </div>
</body>
</html>