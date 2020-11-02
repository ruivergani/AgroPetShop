              <?php
                require_once("cabecalho.php");
              ?>

              <?php require_once 'config.php'; ?>
              <?php require_once DBAPI; ?>

              <?php $db = open_database(); ?>
  
              <h1 class="titulo text-center">Bem Vindo <i> <?= $_SESSION['nome']?> </i>!</h1>
              <hr/>
              <br>
              <style type="text/css">
                .glyphicon {  margin-bottom: 10px;margin-right: 10px;}
                small {
                  display: block;
                  line-height: 1.428571429;
                  color: #999;
                }
              </style>

              <?php if ($db) : ?>
                <div class="container">
                  <div class="row">
                      <div class="col-xs-12 col-sm-8 col-md-6 col-md-offset-2 col-lg-offset-2">
                          <div class="well well-sm">
                              <div class="row">
                                  <div class="col-sm-6 col-md-4">
                                      <img src="img/avatar.png" alt="" class="img-responsive" />
                                  </div>
                                  <div class="col-sm-6 col-md-8">
                                      <h4>Usuário: <?= $_SESSION['usuario']?> </h4>
                                      <small><cite title="Minas Gerais, BRA">Minas Gerais, BRA <i class="fa fa-fw fa-map-marker">
                                      </i></cite></small>
                                      <p>
                                          <i class="fa fa-fw fa-envelope"></i> <?= $_SESSION['email']?> 
                                          <br />
                                          <i class="fa fa-fw fa-globe"></i><a href=""> www.petshopprorural.com</a>
                                          <br />
                                          <i class="fa fa-fw fa-address-card"></i> Cargo: <?= $_SESSION['cargo']?></p>
                                      <!-- Split button -->
                                      <div class="btn-group">
                                          <button type="button" class="btn btn-primary">
                                              Social</button>
                                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                              <span class="caret"></span><span class="sr-only">Social</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                              <li><a href="#"><i class="fa fa-fw fa-google-plus-official" aria-hidden="true"></i> Google +</a></li>
                                              <li><a href="#"><i class="fa fa-fw fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#"><i class="fa fa-fw fa-github" aria-hidden="true"></i> Github</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
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