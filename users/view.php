                <?php
                  require_once('cabecalho.php');
                  require_once('functions.php'); 
                  view($_GET['id']);
                ?>

                <h2 class="titulo">Usuário: <i><?php echo $user['nome']; ?></i></h2>
                <hr>
                <br>

                <dl class="dl-horizontal">
                  <dt>Nome <span class="hidden-xs">/ Razão Social</span>:</dt>
                  <dd><?php echo $user['nome']; ?></dd>

                  <dt>Usuário:</dt>
                  <dd><?php echo $user['usuario']; ?></dd>

                  <dt>Cargo / Função:</dt>
                  <dd><?php echo $user['cargo']; ?></dd>
                </dl>

                <dl class="dl-horizontal">
                  <dt>E-mail:</dt>
                  <dd><?php echo $user['email']; ?></dd>

                  <dt class="hidden-xs">Senha:</dt>
                  <dd class="hidden-xs"><?php echo md5($user['senha']);?></dd>    
                </dl>
                
                <div id="actions" class="row">
                  <div class="col-md-12 botoesviews">
                    <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Editar</a>
                    <a href="index.php" class="btn btn-default">Voltar</a>
                  </div>
                </div>

            </div> <!-- fim container fluid -->
        </div><!-- fim page wrapper -->

    </div><!-- fim wrapper -->
<?php
  require_once("../topo.php");
?>
</body>
</html>