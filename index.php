<!DOCTYPE html>
<!-- ==============================
    Projeto:        Software AgroPetshop
    Versão:         1.0
    Autores:        Rui Vergani Neto, Jaquelyne Alves dos Santos e Davi Martins de Sousa
    Uso:            Profissional.
    Email:          vergani.neto@gmail.com / jaquelyne.pf23@gmail.com / davi.martins@gmail.com
    Website:        http://www.agropetshop.com.br
================================== -->
<html lang="pt-br">
<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login | AgroPetShop</title>
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
	  <link rel="stylesheet" href="css/login.css">
	  <link rel="stylesheet" type="text/css" href="css/preloader.css">

	  <script src="js/jquery-3.1.1.min.js"></script>
	  <script src="js/bootstrap.js"></script>
	  <script src="js/script.js"></script>
	  <script type="text/javascript" src="js/scripts.js"></script>
	  
	  
</head>
	<!-- Preloader Start -->
    <div id="preloader">
	  <div class="loader"></div>
    </div>
    <!-- Preloader End -->
<body>
	<div class="account-wall col-sm-6 col-md-4 col-lg-3 col-sm-offset-3 col-md-offset-4 col-lg-offset-5" id="bloco">
        <h1 class="text-center login-title">ACESSAR O SISTEMA</h1>
		<img class="profile-img img-responsive" src="img/avatar.png">
		<?php
		session_start();
		if(isset($_SESSION['loginErro'])){
		?>
		<div class="alert alert-danger alert-dismissable text-center">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
		      &times;
		   </button>
			<strong><?=$_SESSION['loginErro'];?></strong>
		</div>
		<?php
			unset($_SESSION['loginErro']);		
		}
		?>
		
		<form class="form-signin" action="login.php" method="post">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user-circle fa-lg"></i></span>
				<input type="text" class="form-control" name="usuario" placeholder="Usuário" required autofocus>
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-key fa-lg"></i></span>
				<input type="password" class="form-control" name="senha" placeholder="Senha" required>
			</div>
			<br>
			<button type="submit" class="btn btn-lg btn-primary btn-block">Acessar <span class="fa fa-sign-in"></span>
			</button>
			<a href="cad_usuario.php" class="pull-left new-account">Criar Conta</a>
			<a href="esqueci_senha.php" class="pull-right need-help">Esqueceu sua senha?</a><span class="clearfix"></span>
		</form>
			<script src="js/jquery-3.1.1.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
     </div>
</body>
</html>