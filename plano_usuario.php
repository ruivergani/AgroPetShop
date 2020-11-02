<?php
require_once("cabecalho.php");
?>
<link rel="stylesheet" type="text/css" href="css/icons.css">
<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto+Slab');
  hr#hr {
  border-bottom: 2px solid #4c9cef;
  width: 42px;
  margin: 0 auto;
}
 a#a{
  text-decoration: none;
  color: black;
 }
</style>

<section>
  <div class="row">
    <div class="col-sm-12">
      <div class="">
        <h1 class="text-center titulo">Plano de Usuário.</h1>
        <hr id="hr">
        <i><a id="a" href="users/index.php"><p class="text-center" style="font-family: 'Roboto Slab', serif; font-size: 15px;">
          Mude seu plano para um melhor!. <i class="fa fa-fw fa-external-link"> </i></p></a></i>
      </div>
    </div>
  </div>
  <br>

    <div class="col-md-4 col-sm-6" >
      <div class="well border" style="border: 2px solid #01579b !important;">
        <h2 class="muted">Prata</h2>
          <p><span class="label label-default">CARO</span></p>
        <ul class="list-unstyled" id="prata">
          <li class="fa fa-check-square-o"> 10 usuários</li><br>
          <li class="fa fa-check-square-o"> Acesso Ilimitado</li><br>
          <li class="fa fa-check-square-o"> 3TB de Espaço</li><br>
          <li class="fa fa-check-square-o"> Suporte de E-mail</li>
        </ul>          
        <p class="text-justify">Com esse plano você tem uma Gestão Comercial Completa, integração a loja Virtual, Acessos Simultaneos Ilimitados e Pontos de Venda Offline ilimitados.</p>
        <hr>
        <h3>$15.99 / Mês</h3>
        <hr>
        <p><a class="btn btn-success btn-large active" href="#"><i class="icon-ok"></i>Selecionar Plano</a></p>
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="well">
        <h2 class="text-warning">Bronze</h2>
        <p><span class="label label-success">POPULAR</span></p>
        <ul class="list-unstyled">
          <li class="fa fa-check-square-o"> 5 usuários</li><br>
          <li class="fa fa-check-square-o"> Acesso Ilimitado</li><br>
          <li class="fa fa-check-square-o"> 1TB de espaço</li>
        </ul>          
        <p class="text-justify">Compre uma versão com recursos medianos para administração de sua empresa. Você, com esse plano, possui uma Gestão Comercial Mediana, com Acessos Simultaneos.</p>
        <hr>
        <h3>$10.99 / Mês</h3>
        <hr>
        <p><a class="btn btn-success btn-large active" href="#"><i class="icon-ok"></i>Selecionar Plano</a></p>
      </div>
    </div>

    <div class="col-md-4 col-sm-7">
      <div class="well">
        <h2 class="text-info">Econômico</h2>
        <p><span class="label label-info">ECONÔMICO</span></p>
        <ul class="list-unstyled">
          <li class="fa fa-check-square-o"> 1 usuário</li><br>
          <li class="fa fa-check-square-o"> 5TB de espaço</li><br>
          <li class="fa fa-check-square-o"> Suporte por Chat</li><br>
          <li class="fa fa-check-square-o"> Online 12 horas por dia.</li><br>
        </ul>          
        <p class="text-justify">Versão com recursos básicos para a administração do seu Sistema. Acesso Ilimitado. Pontos de Venda Offline e suporte por chat completo.</p>
        <hr>
        <h3>$8.99 / Mês</h3>
        <hr>
          <p><a class="btn btn-success btn-large active" href="#"><i class="icon-ok"></i>Selecionar Plano</a></p>
      </div>
   </div>

<?php
require_once("topo.php");
?>