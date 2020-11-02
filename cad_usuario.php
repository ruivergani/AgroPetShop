<!DOCTYPE html>
<html lang="pt-br">
<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastrar | AgroPetShop</title>
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
	<div class="account-wall col-sm-6 col-md-4 col-lg-3 col-sm-offset-3 col-md-offset-4 col-lg-offset-5" id="bloco">
        <h1 class="text-center login-title">CADASTRAR NOVO USUÁRIO</h1>

			  <form id="form" data-toggle="validator" role="form" class="form-signin" action="cad_usuario_envia.php" method="post">
                <div class="form-group">
                  <label for="nome" class="control-label">Nome:</label>
                  <div class="input-group">
                    <span class="input-group-addon"  data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Digite seu nome ao lado</strong>"><i class="fa fa-etsy"></i></span>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" data-error="Por favor, preencha este campo." required autofocus>
                  </div>
                  <small class="help-block with-errors"></small>
                </div>

                <div class="form-group">
                  <label for="usuario">Usuário:</label>
                  <div class="input-group">
                    <span class="input-group-addon" data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Digite seu usuário ao lado</strong>"><i class="fa fa-user-o"></i></span>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome de Usuário" data-error="Por favor, preencha este campo." required>
                  </div>
                  <small class="help-block with-errors"></small>
                </div>
              
                <div class="form-group">
                  <label for="email" class="control-label">Email:</label>
                  <div class="input-group">
                    <span class="input-group-addon"  data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Digite seu e-mail ao lado</strong>"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email" data-error="Por favor, digite um e-mail correto." required>
                  </div>
                  <small class="help-block with-errors"></small>
                </div>

                <div class="form-group">
                  <label for="cargo" class="control-label">Cargo:</label>
                  <div class="input-group">
                    <span class="input-group-addon"  data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Digite seu cargo ao lado</strong>"><i class="fa fa-address-card-o"></i></span>
                    <input type="text" class="form-control" id="cargo" placeholder="Ex.: Atendente" name="cargo" required>
                  </div>
                  <small class="help-block with-errors small"></small>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword" class="control-label">Senha:</label>
                  <div class="input-group">
                    <span class="input-group-addon"  data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Digite sua senha ao lado</strong>"><i class="fa fa-unlock-alt"></i></span>
                    <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Senha" name="senha" required>
                  </div>
                  <small class="help-block"> Mínimo de 6 digítos</small>
                </div>

                <div class="form-group">
                  <label for="InputPasswordConfirm" class="control-label">Confirmar Senha:</label>
                  <div class="input-group">
                    <span class="input-group-addon"  data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Repita sua senha!</strong>"><i class="fa fa-unlock-alt"></i></span>
                    <input type="password" class="form-control" id="InputPasswordConfirm" name="conf_senha" placeholder="Confirmar Senha" data-match="#inputPassword" data-match-error="Ops, as senhas não estão iguais!" required>
                    </div>
                  <small class="help-block with-errors"></small>
                </div> 
                            
                <button type="submit" class="btn btn-primary active">Cadastrar</button>
                <a href="index.php" class="btn btn-danger">Cancelar</a>
            </form>
   </div>
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-notify.min.js"></script></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/adsbygoogle.js"></script>
  <script src="js/ace.js"></script>
  <script src="js/conteudo.js"></script>  
  <script src="js/jquery.mask.min.js"></script>
</body>
</html>