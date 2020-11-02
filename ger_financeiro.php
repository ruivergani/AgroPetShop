              <?php
                require_once("cabecalho.php");
              ?>

              <?php require_once 'config.php'; ?>
              <?php require_once DBAPI; ?>

              <?php $db = open_database(); ?>
  
              <h1 class="titulo">Lançamento Financeiro</h1>
              <hr/>

              <?php if ($db) : ?>

              <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" id="cad">
                  <a href="financials/add_pagar.php" class="btn btn-danger center-block">
                    <div class="row">
                      <div class="col-xs-12 text-center">
                        <i class="fa fa-fw fa-plus fa-5x"></i>
                      </div>
                      <div class="col-xs-12 text-center">
                        <p>Conta a Pagar</p>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" id="cad">
                  <a href="financials/add_receber.php" class="btn btn-success center-block">
                    <div class="row">
                      <div class="col-xs-12 text-center">
                        <i class="fa fa-fw fa-plus fa-5x"></i>
                      </div>
                      <div class="col-xs-12 text-center">
                        <p>Conta a Receber</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 cad1" id="cad">
                  <a href="financials/index.php" class="btn btn-default">
                    <div class="row">
                      <div class="col-xs-12 text-center">
                        <i class="fa fa-fw fa-percent fa-5x"></i>
                      </div>
                      <div class="col-xs-12 text-center">
                        <p>Financeiro</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <?php else : ?>
                <div class="alert alert-danger" role="alert">
                  <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
                </div>

              <?php endif; ?>

            </div> <!-- fim container fluid -->
        </div><!-- fim page wrapper -->

    </div><!-- fim wrapper -->

</body>
</html>