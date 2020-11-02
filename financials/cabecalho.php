<?php
    require_once("../valida_session.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gerenciador Administrativo | AgroPetShop</title>
    <meta name="description" content="O Sistema AgroPetShop tem como objetivo auxiliar os administradores de empresa com Gerenciamento de Clientes, Produtos, Financeiro, Fluxo de Caixa e emissão de Relatórios.">
    <meta name="keywords" content="AgroPetshop, PetShop, Sistema Administrativo">
    <meta name="robots" content="index, follow">
    <meta name="generator" content="Sublime Text 3" /> 
    <meta name="author" content="Davi Martins de Sousa, Jaquelyne Alves dos Santos, Rui Vergani Neto">
    <meta name="copyright" content="© 2017 AgroPetShop" />
    <link rel="icon" href="../img/dog (1).png">

    <!--Links externos-->
    <link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.css">
    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/style.css">

    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/wow.min.js"></script>
</head>
<body>
  <div id="interface">
    <div id="wrapper">
      
        <!-- Navegação -->
        <nav class="navbar navbar-inverse navbar-fixed-top navegacao" role="navigation">
            <!-- Estrutura para display em mobile -->
            <div class="navbar-header">
                <button type="button" id="hamburguer" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
                <a class="navbar-brand text-center" href="../principal.php">
                  <img src="../img/dog (1).png" class="img-responsive img-circle" style="width: 37px; color: #fff; float: left; padding: 0px 10px 0 0; margin-top: -3px;"><span id="logo">Agro & Pet <i>Prorural</i></span>
                </a>
            </div>

            <!-- Menu Topo Itens -->
            <ul class="nav navbar-right top-nav">

              <li id="oper" class="hidden-xs"><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-html="true" data-original-title="<strong>Avisos</strong>">
                  <i class="fa fa-envelope"></i>
                  </a>
              </li>
              
              <li id="oper" class="hidden-xs"><a href="#" data-placement="bottom" data-html="true" data-toggle="tooltip" href="#" data-original-title="<strong>Calendário</strong>">
                  <i class="fa fa-calendar"></i>
                  </a>
              </li>
              
              <li id="oper" class="dropdown hidden-xs" data-html="true" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="<strong>Dúvidas</strong>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="fa fa-lg fa-question-circle"> </b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header text-center">Acesso a Informação</li>
                  <li><a href="../atendimentochat.php"><i class="fa fa-fw fa-commenting"></i> Atendimento via Chat</a></li>
                  <li><a href="../criadores.php"><i class="fa fa-fw fa-sitemap"></i> Equipe de Desenvolvedores</a></li>
                  <li><a href="../pagina_em_construcao.php"><i class="fa fa-fw fa-cog "></i> Configurar Usuário Suporte</a></li>
                  <li><a href="../pagina_em_construcao.php"><i class="fa fa-fw fa-life-ring"></i> Página de Suporte</a></li>
                  <li><a href="../pagina_em_construcao.php"><i class="fa fa-fw fa-user-circle-o"></i> Suporte Remoto</a></li>
                  <li><a href="../download_arquivos.php"><i class="fa fa-fw fa-cloud-download"></i> Downloads de Arquivos</a></li>
                  <li><a href="../informacoes_sistema.php"><i class="fa fa-fw fa-code"></i> Informações do Sistema</a></li>
                </ul>
              </li>

              <li id="oper" class=""><a data-placement="bottom" data-html="true" data-toggle="tooltip" href="#" data-original-title="<strong>Notificações</strong>">
                    <i class="fa fa-bell"></i>
                  </a>
              </li>

              <li class="dropdown" data-placement="bottom" data-html="true" data-toggle="tooltip" data-original-title=" <strong>Usuário</strong>">
                <button class="navbar-btn" data-toggle="dropdown">
                  <img src="http://lorempixel.com/30/30/people" class="img-circle">
                </button>
                <ul class="dropdown-menu">
                  <li class="dropdown-header text-center">Informações Usuário: <br> <?= $_SESSION['nome']?></li>
                  <li class="nav-divider"></li>
                  <li><a href="../conta_usuario.php"><i class="fa fa-fw fa-user-secret"></i> Conta</a></li>
                  <li><a href="../plano_usuario.php"><i class="fa fa-fw fa-credit-card"></i> Meu Plano</a></li>
                  <li><a href="../logout.php"><i class="fa fa-fw fa-user-o"></i> Trocar Usuário</a></li>
                  <li class="nav-divider"></li>
                  <li><a href="../logout.php"><i class="fa fa-fw fa-sign-out"></i> Sair</a></li>
                </ul>
              </li>

            </ul>
            <!-- Sidebar Menu Itens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">

                    <li>
                      <a href="../principal.php"><i class="fa fa-fw fa-home" aria-hidden="true" ></i> Início</a>
                    </li>

                    <li>
                      <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-shopping-cart" aria-hidden="true"></i> Realizar Venda <i class="fa fa-angle-down pull-right"></i></a>
                      <ul id="submenu-1" class="collapse">
                        <li><a href="../sales/add.php"><i class="fa fa-fw fa fa-money"></i>Nova Venda</a></li>
                        <li><a href="../sales/index.php"><i class="fa fa-fw fa-search"></i>Consultar Vendas</a></li>
                      </ul>
                    </li>

                    <li>
                      <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa fa-shopping-basket" aria-hidden="true"></i> Registrar Compra <i class="fa fa-angle-down pull-right"></i></a>
                      <ul id="submenu-2" class="collapse">
                        <li><a href="#"><i class="fa fa-fw fa-shopping-bag"></i>Nova Compra</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-search"></i>Consultar Compras</a></li>
                      </ul>
                    </li>

                    <li>
                      <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa fa-users" aria-hidden="true"></i> Gerenciar Usuários <i class="fa fa-angle-down pull-right"></i></a>
                      <ul id="submenu-3" class="collapse">
                        <li><a href="../users/add.php"><i class="fa fa-fw fa-user-plus"></i>Novo Usuário</a></li>
                        <li><a href="../users/index.php"><i class="fa fa-fw fa-search"></i>Consultar Usuários</a></li>
                      </ul>
                    </li>
                    
                    <li>
                      <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="fa fa-fw fa-cubes" aria-hidden="true"></i> Gerenciar Produtos <i class="fa fa-angle-down pull-right"></i></a>
                      <ul id="submenu-4" class="collapse">
                        <li><a href="../products/add.php"><i class="fa fa-fw fa-plus"></i>Novo Produto</a></li>
                        <li><a href="../products/index.php"><i class="fa fa-fw fa-search"></i>Consultar Produtos</a></li>
                      </ul>
                    </li>

                    <li>
                      <a href="#"  data-toggle="collapse" data-target="#submenu-5"><i class="fa fa-fw fa-address-book" aria-hidden="true"></i> Gerenciar Clientes <i class="fa fa-angle-down pull-right"></i> </a>
                      <ul id="submenu-5" class="collapse">
                        <li><a href="../costumers/add.php"><i class="fa fa-fw fa-user-plus"></i>Novo Cliente</a></li>
                        <li><a href="../costumers/index.php"><i class="fa fa-fw fa-search"></i>Consultar Clientes</a></li>
                      </ul>
                    </li>

                    <li>
                      <a href="#" class="active" data-toggle="collapse" data-target="#submenu-6"><i class="fa fa-fw fa-usd" aria-hidden="true"></i> Gerenciar Financeiro <i class="fa fa-angle-down pull-right"></i></a>
                      <ul id="submenu-6" class="collapse">
                        <li><a href="index.php"><i class="fa fa-fw fa-percent"></i>Fluxo de Caixa</a></li>
                      </ul>
                    </li>

                    <li>
                      <a href="#" data-toggle="collapse" data-target="#submenu-7" ><i class="fa fa-fw fa-bar-chart" aria-hidden="true"></i> Emitir Relatórios <i class="fa fa-angle-down pull-right"></i></a>
                      <ul id="submenu-7" class="collapse">
                        <li><a href="#"><i class="fa fa-fw fa-file-image-o"></i>Novo Relatório</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-search"></i>Consultar Relatórios</a></li>
                      </ul>
                    </li>
                    
                    <li>
                      <a href="#" data-toggle="collapse" data-target="#submenu-8" ><i class="fa fa-fw fa-truck" aria-hidden="true"></i> Gerenciar Fornecedor<i class="fa fa-angle-down pull-right"></i></a>
                      <ul id="submenu-8" class="collapse">
                        <li><a href="#"><i class="fa fa-fw fa-user-secret"></i>Novo Fornecedor</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-search"></i>Consultar Fornecedor</a></li>
                      </ul>
                    </li>

                    <li>
                      <a href="#" data-toggle="collapse" data-target="#submenu-9"><i class="fa fa-fw fa-wrench" aria-hidden="true"></i> Gerenciar Serviços <i class="fa fa-angle-down pull-right"></i></a>
                      <ul id="submenu-9" class="collapse">
                        <li><a href="#"><i class="fa fa-fw fa-cogs"></i>Novo Serviço</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-search"></i>Consultar Serviços</a></li>
                      </ul>
                    </li>

                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">