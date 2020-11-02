              <?php
                require_once('cabecalho.php');
                require_once('functions.php'); 
                add();
              ?>
              <head>
                <script type="text/javascript" src="../js/validator.js"></script>
                <script type="text/javascript" src="../js/validator.min.js"></script>
              </head>
             
              
              <h2 class="titulo">Novo Usuário</h2>
    
              <form action="add.php" data-toggle="validator" role="form" method="post">
                <!-- area de campos do form -->
                <hr />
                <br>
                <div class="row">
                  <div class="form-group col-md-4 col-lg-4">
                    <label for="nome" class="control-label">Nome / Razão Social</label>
                    <input type="text" class="form-control" id="nome" name="user['nome']" placeholder="Nome Completo" data-error="Por favor, preencha este campo." required autofocus>
                    <small class="help-block with-errors small"></small>
                  </div>

                  <div class="form-group col-md-4 col-lg-4">
                    <label for="usuario" class="control-label">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="user['usuario']" placeholder="Nome de Usuário" data-error="Por favor, preencha este campo." required>
                    <small class="help-block with-errors small"></small>
                  </div>

                  <div class="form-group col-md-4 col-lg-4">
                    <label for="email" class="control-label">Email:</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="user['email']" data-error="Por favor, digite um e-mail correto." required>
                    </div>
                    <small class="help-block with-errors small"></small>
                  </div>
                </div>
                
                <div class="row">

                  <div class="form-group col-md-4 col-lg-4">
                    <label for="cargo" class="control-label">Cargo:</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
                      <input type="text" class="form-control" id="cargo" placeholder="Ex.: Atendente" name="user['cargo']" required>
                    </div>
                    <small class="help-block with-errors small"></small>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="inputPassword" class="control-label">Senha:</label>
                    <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Senha" name="user['senha']" required>
                    <small class="help-block small">  Mínimo de 6 digítos</small>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="InputPasswordConfirm" class="control-label">Confirmar Senha:</label>
                    <input type="password" class="form-control" id="InputPasswordConfirm" name="conf_senha" placeholder="Confirmar Senha" data-match="#inputPassword" data-match-error="Ops, as senhas não estão iguais!" required>
                    <small class="help-block with-errors small"></small>
                  </div>
                </div>
                     
                <div id="actions" class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="index.php" class="btn btn-default">Cancelar</a>
                  </div>
                </div>
              </form>

            </div> <!-- fim container fluid -->
        </div><!-- fim page wrapper -->

    </div><!-- fim wrapper -->
<?php
  require_once("../topo.php");
?>

</body>
</html>