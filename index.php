<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Palindromo</title>
	<link rel="stylesheet" type="text/css" href="./public/css/bootstrap.css">
</head>
<style type="text/css">
		body{
			background-image: url('./public/img/fondo.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			background-position: center center;

		}
		.mainh-100{
			margin-top:20vh;
		}
		h1{
			color: white;
		}

		label{
			color: white;
			font-size: 16px;
		}
		.padre {
		  display: flex;
		  justify-content: center;
		}
</style>
<body>
	<main class="mainh-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center padre">
					<div class="card" style="border-radius:10%; background: rgb(40, 55, 71);width: 20rem;">
						<div class="card-header">
							<h1>Palindromo</h1>		
						</div>
						<div class="card-body">
							<form id="formulario">
								<label for="Palindromo">Ingresa una palabra</label>
								<input type="text" class="form-control mt-3" name="Palindromo" id="Palindromo" required>
								<button type="submit" class="btn btn-primary mt-4">Enviar</button>
							</form>	
						</div>
					</div>
				</div>
			</div>	
		</div>
	</main>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="./public/js/Palindromo.js"></script>
</html>