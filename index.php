<!DOCTYPE html>
<html>
<head>
	<title>Tabalho Sistema de Telecomunicação</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-8 col-md-offset-2">

			<div class="panel panel-primary">
				<div class="panel-heading">Estimador de alcance de propagação em VHF</div>
				<div class="panel-body">

					<form id="form-alcance" class="sppb-ajaxt-contact-form" action="javascript: calcular();" method="POST" enctype="multipart/form-data">

						<div class="form-group sppb-form-group">

							<div class="row">
								<div class="col-md-6">
									<div class="form-group sppb-form-group">
										<label for="primeira-antena">Altura da 1ª antena (m)</label> 
										<input id="primeira-antena" class="form-control sppb-form-control" maxlength="7" name="primeira-antena" type="number" placeholder="0m" required="required"/>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group sppb-form-group">
										<label for="segunda-antena">Altura da 2ª antena (m)</label> 
										<input id="segunda-antena" class="form-control sppb-form-control" maxlength="7" name="segunda-antena" type="number" placeholder="0m" required="required"/>
									</div>
								</div>

							</div>

							<div class="row">
								<button class="btn btn-primary pull-right" type="submit" style="margin-right: 15px;">Calcular</button>
							</div>

						</div>

					</form>

				</div>
			</div>

			<div id="painel-resultado" class="panel panel-default" style="display: none;">
			  <div class="panel-body">

			  	<button class="btn btn-danger" id="visada" disabled style="position: absolute; bottom: 30px; left: 42%;"></button>
			  	<button class="btn btn-primary" id="d1" disabled style="position: absolute; top: 280px; left: 17%;"></button>
			  	<button class="btn btn-primary" id="d2" disabled style="position: absolute; top: 280px; right: 17%;"></button>

			  	<img src="visada-img.png" width="100%" alt="imagem exemplo de visada">
			    
			  </div>
			</div>

		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="scripts.js?1"></script>
</body>
</html>