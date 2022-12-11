
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro User</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<style>
		.conteiner{
			margin-left: 7cm;
			margin-top: 4cm;
			padding: 0px 50px 0px 50px;
			width: 800px;
			height: 400px;
			border-radius: 10px;
			background: gray;
		}
		.titulor{
			padding-top: 20px;
			padding-bottom: 5px;
			text-align: center;
		}
		.button input{
			text-align: center;
			margin-left: 7.4cm;
		}
		label{
			font-size: 18px;
			font-weight: 500;

		}
		
	</style>
</head>
<body>
	
	<div class="conteiner ">
		<div class="titulor">
		<h4> <strong>CADASTRO DE USUARIO</strong> </h4>
	</div>
		<form action="cad_userOK.php" method="POST">
	
	<div class="mb-3">
  	  <label class="form-label">Digite o nome do usuário</label>
	  <input type="text" class="form-control" name="nome" required>
	</div>
	<div class="mb-3">
  	  <label class="form-label">Digite o login do usuário</label>
	  <input type="text" class="form-control" name="logins" required>
	</div>
	<div class="mb-3">
  	  <label class="form-label">Digite a senha do usuário</label>
	  <input type="text" class="form-control" name="passwords" required >
	</div>
<div class="button mb-3">
		<input type="submit"  class="btn btn-dark " value="Cadastrar Usuário">
	</div>
</form>
	</div>
	
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>


