                <?php
                  require_once('cabecalho.php');
                  require_once('functions.php'); 
                  edit();
                ?>
                <h2 class="titulo">Atualizar Usuário</h2>
                <style type="text/css">
                  span.espaco{
                    margin-left: 8px;
                  }
                </style>
                <form action="edit.php?id=<?php echo $user['id']; ?>" method="post">
                  <hr />
                  <br>
                  <div class="row">
                    <div class="form-group col-md-4 col-lg-4">
                      <label for="name">Nome / Razão Social</label>
                      <input type="text" class="form-control" name="user['nome']" id="name" maxlength="40" value="<?php echo $user['nome']; ?>">
                    </div>

                    <div class="form-group col-md-2">
                      <label for="usuario">Usuário</label>
                      <input type="text" class="form-control" id="usuario" name="user['usuario']" minlength="14" value="<?php echo $user['usuario']; ?>" disabled>
                    </div>

                    <div class="form-group col-md-3 col-lg-3">
                      <label for="cargo" class="control-label">Cargo:</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
                        <input type="text" class="form-control" id="cargo" name="user['cargo']" value="<?php echo $user['cargo']; ?>">
                      </div>
                      <small class="help-block with-errors small"></small>
                   </div>

                    <div class="form-group col-md-3 col-lg-3">
                    <label for="email">E-mail</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="text" class="form-control"  id="email" name="user['email']" value="<?php echo $user['email']; ?>">
                    </div>
                   </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-4">
                      <label>Deseja Modificar a Senha? </label>
                      <div class="input-group">
                        <input id="opt-ss" type="radio" name="TipoSenha" onclick="tipoSenhaSel();"/> <strong for="opt-ss"> Sim </strong> <span class="espaco"></span>
                        <input id="opt-sn" checked="checked" type="radio" name="TipoSenha" onclick="tipoSenhaSel();"/><strong for="opt-sn"> Não</strong>
                      </div>
                    </div>

                    <div id="sn">
                    </div>
                  </div>

                  <div class="row">
                    <div id="ss" style="display: none;">
                      <div class="form-group col-md-4">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="user['senha']" value="<?php echo $user['senha']; ?>">
                      </div>
                    </div>
                  </div>

                  <div id="actions" class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary">Salvar</button>
                      <a href="index.php" class="btn btn-default">Cancelar</a>
                    </div>
                  </div>
                </form>
                <!--sccript ocuta campo senha-->
                <script type="text/javascript">
                function tipoSenhaSel() {
                  var sn = document.getElementById("opt-sn").checked;
                  if (sn) {
                    document.getElementById("sn").style.display = "block";
                    document.getElementById("ss").style.display = "none";
                  } else {
                    document.getElementById("sn").style.display = "none";
                    document.getElementById("ss").style.display = "block";
                  }
                }
                </script>

            </div> <!-- fim container fluid -->
        </div><!-- fim page wrapper -->

    </div><!-- fim wrapper -->
<?php
  require_once("../topo.php");
?>
</body>
</html>