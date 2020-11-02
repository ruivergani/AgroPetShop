             <?php
                  require_once('cabecalho.php');
                  require_once('functions.php');
                  require_once('modal.php');
                  index();
              ?>

              <header>
                <div class="row">
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7">
                    <h2 class="titulo col-sm-12 col-md-4 col-lg-4">Financeiro</h2>
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
                    <a class="btn btn-primary" href="add.php"><i class="fa fa-fw fa-plus"></i><span class="hidden-sm">Nova Conta </span></a>
                    <a class="btn btn-default" href="index.php"><i class="fa fa-fw fa-refresh"></i><span class="hidden-xs hidden-sm hidden-md"> Atualizar</span></a>
                    <a class="btn btn-default" href="../ger_financeiro.php"><i class="fa fa-fw fa fa-chevron-circle-left"></i><span class="hidden-xs hidden-sm hidden-md"> Voltar</span></a>
                  </div>
                </div>
              </header>

              <hr class="hidden-xs">
              
              <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th class="nome">Descrição <span class="hidden-xs"> Principal </span></th>
                  <th class="hidden-xs hidden-sm">Conta à</th>
                  <th class="hidden-xs hidden-sm">Valor Total</th>
                  <th class="hidden-xs hidden-sm hidden-md">Vencimento em</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tbody>
              <?php if ($financials) : ?>
              <?php foreach ($financials as $financial) : ?>
                <tr>
                  <td><?php echo $financial['id']; ?></td>
                  <td><?php echo $financial['descricao_principal']; ?></td>
                  <td class="hidden-xs hidden-sm">
                  <?php
                  if ($financial['tipo_conta'] == 1) {
                    echo "<span class='label label-success'>Receber</span>";
                  }
                  if ($financial['tipo_conta'] == 2) {
                    echo "<span class='label label-danger'>Pagar</span>";
                  }
                  ?></td>
                  <td class="hidden-xs hidden-sm currency"><i class="fa fa-usd" aria-hidden="true"></i> <?php echo $financial['valor_total']; ?></td>
                  <td class="hidden-xs hidden-sm hidden-md"><?php echo date('d/m/Y', strtotime($financial['data_vencimento'])); ?></td>
                  
                  <td class="actions text-left">
                    <a href="view.php?id=<?php echo $financial['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> <span class="hidden-xs">Visualizar</span></a>
                    <a href="edit.php?id=<?php echo $financial['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i><span class="hidden-xs"> Editar </span></a>
                    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal-conta" data-customer="<?php echo $financial['id']; ?>">
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