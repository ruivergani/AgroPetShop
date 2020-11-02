              <?php
                  require_once('cabecalho.php');
                  require_once('functions.php');
                  require_once('modal.php');
                  index();
              ?>

              <header>
                <div class="row">
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7">
                    <h2 class="titulo  col-sm-12 col-md-4 col-lg-4">Usuários</h2>
                    <hr class="visible-xs">

                    <?php if (!empty($_SESSION['message'])) : ?>
                      <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible col-sm-12 col-md-8 col-lg-7" role="alert" id="message">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <span data-html="true"><strong><?php echo $_SESSION['message']; ?></strong></span>
                      </div>
                      <?php endif; 
                        unset($_SESSION['message']);
                      ?>
                      <script>
                      setTimeout(function(){ 
                          $('#message').remove();   
                      }, 4500);   
                     </script>

                  </div>
                  <div class="text-right h2 button col-sm-4 col-md-4 col-lg-5" id="btntopo">
                    <a class="btn btn-primary" href="add.php"><i class="fa fa-fw fa-plus"></i><span class="hidden-sm"> Novo Usuário</span></a>
                    <a class="btn btn-default" href="index.php"><i class="fa fa-fw fa-refresh"></i><span class="hidden-xs hidden-sm hidden-md"> Atualizar</span></a>
                    <a class="btn btn-default" href="../ger_usuarios.php"><i class="fa fa-fw fa fa-chevron-circle-left"></i><span class="hidden-xs hidden-sm hidden-md"> Voltar</span></a>
                  </div>
                </div>
              </header>

              <hr class="hidden-xs">

              <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th class="nomeuser">Nome</th>
                  <th class="hidden-xs">Usuário</th>
                  <th class="hidden-xs hidden-sm">E-mail</th>
                  <th class="hidden-xs hidden-sm hidden-md">Cargo</th>
                  <th>Opções</th>
                </tr>
              </thead>
              
              <tbody>
              <?php if ($users) : ?>
              <?php foreach ($users as $user) : ?>
                <tr>
                  <td><?php echo $user['id']; ?></td>
                  <td><?php echo $user['nome']; ?></td>
                  <td class="hidden-xs"><?php echo $user['usuario']; ?></td>
                  <td class="hidden-xs hidden-sm"><?php echo $user['email']; ?></td>
                  <td class="hidden-xs hidden-sm hidden-md"><?php echo $user['cargo']; ?></td>
                  <td class="actions text-left">
                    <a href="view.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> <span class="hidden-xs">Visualizar</span></a>
                    <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i><span class="hidden-xs"> Editar </span></a>
                    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal-user" data-customer="<?php echo $user['id']; ?>">
                    <i class="fa fa-trash"></i> <span class="hidden-xs">Excluir</span>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td colspan="6">Nenhum registro encontrado.</td>
                </tr>
              <?php endif; ?>
              </tbody>
              </table>
              <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
              <script>window.jQuery || document.write('<script src="<?php echo BASEURL; ?>js/jquery-1.11.0.min.js"><\/script>')</script>
              <script src="<?php echo BASEURL; ?>js/bootstrap.min.js"></script> -->
              <script src="<?php echo BASEURL; ?>js/main.js"></script>
            </div> <!-- fim container fluid -->
        </div><!-- fim page wrapper -->

    </div><!-- fim wrapper -->
<?php
  require_once("../topo.php");
?> 
</body>
</html>