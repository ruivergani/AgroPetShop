<?php
require_once("cabecalho.php");
?>
<script>
    $(function(){
      $('[data-toggle="popover"]').popover({
          trigger:'hover'
        })
    });
</script>

                <!-- Page Heading -->
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12" style="padding: 0;">
                        <article id="services" class="text-center text-uppercase">

                            <div class="col-sm-6 col-md-3" id="item">
                              <div class="services-grid" class="btn btn-default">
                                <a href="ger_vendas.php">
                                  <span class="fa fa-fw fa-shopping-cart center-block"></span>
                                  <h5>Realizar Venda </h5>
                                </a>
                              </div>
                            </div>

                            <div class="col-sm-6 col-md-3" id="item">
                              <div class="services-grid">
                                <a href="ger_produtos.php">
                                  <span class="fa fa-fw fa-cubes center-block"></span>
                                  <h5>Gerenciar Produtos</h5>
                                </a>
                              </div>
                            </div>

                            <div class="col-sm-6 col-md-3" id="item">
                              <div class="services-grid">
                                <a href="ger_clientes.php">
                                  <span class="fa fa-fw fa-address-book center-block"></span>
                                  <h5>Gerenciar Clientes</h5>
                                </a>
                              </div>
                            </div>

                            <div class="col-sm-6 col-md-3 " id="item">
                              <div class="services-grid">
                                <a href="ger_financeiro.php">
                                  <span class="fa fa-fw fa-usd center-block"></span>
                                  <h5>Contas a Pagar e Receber</h5>
                                </a>
                              </div>
                            </div>

                      </article>
                </div>
              </div>
              
              <?php require_once 'config.php'; ?>
              <?php require_once DBAPI; ?>

              <?php $db = open_database(); ?>

              <?php if ($db) : ?>

              <div class="panel-group number">
                <div class="panel panel-info">
                  <div class="panel-heading text-uppercase"><span data-toggle="popover" data-placement="right" href="#" title="Aviso!" data-content="Valores financeiros sem considerar intervalo de tempo." id="number1">Números</span></div>
                  <div class="panel-body">
                  
                    <div class="col-md-3 col-sm-6 numero verde text-center text-uppercase" id="panel-num">
                      <h5 title="" bt-xtitle="" class="bt-active bt-active">Total de Contas a Receber</h5>
                      <small title="" bt-xtitle="" class="bt-active bt-active">R$</small>
                      <span title="" bt-xtitle="" class="bt-active bt-active">
                       <?php
                          $conexao = mysqli_connect("localhost", "root", "", "wda_crud");
                          $sql = "SELECT SUM(valor_total) valor_somado FROM financials WHERE tipo_conta = '1'";
                          $query = mysqli_query($conexao,$sql);
                          $exibir = mysqli_fetch_array($query);
                          echo number_format ( $exibir['valor_somado'], 2);
                          echo "<br>";
                        ?>
                      </span>
                    </div>

                    <div class="col-md-3 col-sm-6  numero vermelho text-center text-uppercase" id="panel-num" >
                      <h5 title="" bt-xtitle="" class="bt-active bt-active">Total de Contas a Pagar</h5>
                      <small title="" bt-xtitle="" class="bt-active bt-active">R$</small>
                      <span title="" bt-xtitle="" class="bt-active bt-active">
                         <?php
                          $conexao = mysqli_connect("localhost", "root", "","wda_crud");
                         /*$banco = mysql_select_db("wda_crud");*/
                          $sql = "SELECT SUM(valor_total) valor_somado FROM financials WHERE tipo_conta = '2'";
                          $query = mysqli_query($conexao,$sql);
                          $exibir = mysqli_fetch_array($query);
                          echo number_format ( $exibir['valor_somado'], 2);
                          echo "<br>";
                        ?>
                      </span>
                    </div>

                    <div class="col-md-3  col-sm-6 numero preto text-center text-uppercase" id="panel-num">
                      <h5 title="" bt-xtitle="" class="bt-active bt-active">Produtos em Estoque</h5>
                      <small title="" bt-xtitle="" class="bt-active bt-active">R$</small>
                      <span title="" bt-xtitle="" class="bt-active bt-active">
                        <?php
                          $conexao = mysqli_connect("localhost", "root", "" , "wda_crud");
                         /* $banco = mysql_select_db("wda_crud");*/
                          $sql = "SELECT SUM(valor_venda) valor_somado FROM products";
                          $query = mysqli_query($conexao ,$sql);
                          $exibir = mysqli_fetch_array($query);
                          /*echo  $exibir['valor_somado'];*/
                          echo number_format ( $exibir['valor_somado'], 2);
                          echo "<br>";
                          ?>                                                 
                       </span>
                    </div>

                    <div class="col-md-3 col-sm-6  numero preto text-center text-uppercase" id="panel-num">
                      <h5 title="" bt-xtitle="" class="bt-active bt-active">Total de vendas realizadas</h5>
                      <small title="" bt-xtitle="" class="bt-active bt-active">R$</small>
                      <span title="" bt-xtitle="" class="bt-active bt-active">
                        <?php
                          $conexao = mysqli_connect("localhost", "root", "" , "wda_crud");
                         /* $banco = mysql_select_db("wda_crud");*/
                          $sql = "SELECT SUM(valor_venda) valor_somado FROM sales";
                          $query = mysqli_query($conexao ,$sql);
                          $exibir = mysqli_fetch_array($query);
                          /*echo  $exibir['valor_somado'];*/
                          echo number_format ( $exibir['valor_somado'], 2);
                          echo "<br>";
                          ?> 
                      </span>
                    </div>

                  </div>
                </div>
              </div>

              <br/>
              <br/>
              <br>
              
              <?php else : ?>
                <div class="alert alert-danger" role="alert">
                  <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
                </div>

              <?php endif; ?>
<?php
require_once("topo.php");
require_once("rodape.php");
?>