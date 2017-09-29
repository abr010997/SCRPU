<!DOCTYPE html>
<html>
<head>
	<title>Detalle Ubicación en Sámara</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>
	<div class="container">
		<br>
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">Detalle de Ubicación en Sámara</div>
				<div class="panel-body">
					<ul class="list-group">
					<li class="list-group-item"><strong>Código de la Ubicación::</strong><?php echo $this->class28cuisam->getAtributo('PU28IDUBIC');?></li>
						<li class="list-group-item"><strong>Descripción de la Ubicación:: </strong><?php echo $this->class28cuisam->getAtributo('PU28DSCUBIC');?></li>
						
					</ul>
					<a href="?c=class28cuisam&m=index" class="btn btn-default" role="button">Regresar</a>  

				</div>
			</div>
		</div>
	</div>
</body>
</html>
