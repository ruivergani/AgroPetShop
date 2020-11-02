              <?php
                require_once("cabecalho.php");
              ?>

              <?php require_once 'config.php'; ?>
              <?php require_once DBAPI; ?>

              <?php $db = open_database(); ?>
  
              <h1 class="titulo">Cadastrar Clientes</h1>
              <hr/>

              <?php if ($db) : ?>

              <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" id="cad">
                  <a href="costumers/add.php" class="btn btn-primary center-block">
                    <div class="row">
                      <div class="col-xs-12 text-center">
                        <i class="fa fa-fw fa-plus fa-5x"></i>
                      </div>
                      <div class="col-xs-12 text-center">
                        <p>Novo Cliente</p>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" id="cad">
                  <a href="costumers/index.php" class="btn btn-default center-block">
                    <div class="row">
                      <div class="col-xs-12 text-center">
                        <i class="fa fa-fw fa-user fa-5x"></i>
                      </div>
                      <div class="col-xs-12 text-center">
                        <p>Clientes</p>
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