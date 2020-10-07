<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<title>Importar Arquivo em formato TXT</title>
	</head>
	<body>
		<div class="container">
			<h1>Importar Dados Automaticamente</h1>
		</div>
		<div class="container">
			<?php
			
			if(isset($_SESSION['msg'])){
			
				echo $_SESSION['msg'];
			
				unset($_SESSION['msg']);
			}
			?>
		
			<form method="POST" action="process.php" enctype="multipart/form-data">
				<label>Arquivo</label>
				<!--Campo para fazer o upload do arquivo com PHP-->
				<input type="file" name="arquivo" class="btn btn-primary"><br><br>			
				<input type="submit" value="Importar os Dados para a tabela" class="btn btn-success">
			</form>
		</div>
		

		<style>
		 .container {
			 display: flex;
			 align-items: center;
			 margin-top: 2vh;
		 }
		<style>
	</body>
</html>