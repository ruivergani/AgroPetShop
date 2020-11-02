<!DOCTYPE html>
<html lang="pt-br">
<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Recuperar Senha | AgroPetShop</title>
      <meta name="description" content="O Sistema AgroPetShop tem como objetivo auxiliar os administradores de empresa com Gerenciamento de Clientes, Produtos, Financeiro, Fluxo de Caixa e emissão de Relatórios.">
      <meta name="keywords" content="AgroPetshop, PetShop, Sistema Administrativo">
      <meta name="robots" content="index, follow">
      <meta name="generator" content="Sublime Text 3" /> 
      <meta name="author" content="Davi Martins de Sousa, Jaquelyne Alves dos Santos, Rui Vergani Neto">
      <meta name="copyright" content="© 2017 AgroPetShop" />
      <link rel="icon" href="img/dog (1).png">

      <!--Links externos-->
	  <link rel="stylesheet" href="css/bootstrap.css">
	  <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.css">
	  <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
	  <link rel="stylesheet" href="css/cadastro.css">


	  <script src="js/jquery-3.1.1.min.js"></script>
	  <script src="js/bootstrap.js"></script>
	  <script src="js/script.js"></script>
	  <script type="text/javascript" src="js/validator.js"></script>
      <script type="text/javascript" src="js/validator.min.js"></script>

</head>
<body>
	<div class="account-wall col-sm-6 col-md-4 col-lg-3 col-sm-offset-3 col-md-offset-4 col-lg-offset-5">
        <h1 class="text-center login-title">RECUPERAR SENHA</h1>
		<form class="form-signin" data-toggle="validator" role="form" action="esqueci_senha_envia.php" method="post">
		    <div class="form-group">
		      <p style="text-align: justify;">Caso tenha esquecido sua senha, entre com seu e-mail e clique no botão Recuperar.</p>
		      <label for="email" class="control-label">Email:</label>
		      <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-envelope-o fa-lg"></i></span>
		      	<input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com" data-error="Por favor, digite um e-mail correto." required>
		      </div>
		       <small class="help-block with-errors"></small>
		    </div>
		    <button type="submit" class="btn btn-primary active">Recuperar</button>
		    <a href="index.php" class="btn btn-danger">Cancelar</a>
		</form>
   </div>
</body>
</html>