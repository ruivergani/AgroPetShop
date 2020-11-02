                <?php
                  require_once('cabecalho.php');
                  require_once('functions.php'); 
                  view($_GET['id']);
                ?>


                <h2 class="titulo">Conta: <i><?php echo $financial['descricao_principal']; ?></i></h2>
                <hr>
                <br>

                <dl class="dl-horizontal">
                  <dt>Descrição Principal</dt>
                  <dd><?php echo $financial['descricao_principal']; ?></dd>

                  <dt>Conta à:</dt>
                  <dd>
                  <?php
                  if ($financial['tipo_conta'] == 1) {
                    echo "<span class='label label-success'>Receber</span>";
                  }
                  if ($financial['tipo_conta'] == 2) {
                    echo "<span class='label label-danger'>Pagar</span>";
                  }
                  ?>
                  </dd>

                  <dt class="hidden-xs">Forma de Pagamento:</dt>
                  <dd class="hidden-xs">
                  <?php 
                    if ($financial['forma_pagamento'] == 3) {
                    echo "Dinheiro";
                   }
                   if ($financial['forma_pagamento'] == 4) {
                    echo "Cartão de Crédito";
                   }
                   if ($financial['forma_pagamento'] == 5) {
                    echo "Cartão de Débito";
                   }
                   if ($financial['forma_pagamento'] == 6) {
                    echo "Cheque";
                   }
                   if ($financial['forma_pagamento'] == 7) {
                    echo "Carnê";
                   }
                   if ($financial['forma_pagamento'] == 8) {
                    echo "Duplicata";
                   }
                  ?></dd>
                </dl>

                <dl class="dl-horizontal">
                  <dt>Entidade:</dt>
                  <dd><?php 
                  if ($financial['entidade'] == 9) {
                    echo "Cliente";
                  }
                  if ($financial['entidade'] == 10) {
                    echo "Fornecedor";
                  }
                  if ($financial['entidade'] == 11) {
                    echo "Transportador";
                  }
                  if ($financial['entidade'] == 12) {
                    echo "Funcionário";
                  }
                  if ($financial['entidade'] == 13) {
                    echo "Outros";
                  }
                  ?></dd>

                  <dt>Data de Vencimento:</dt>
                  <dd><?php echo date('d/m/Y', strtotime($financial['data_vencimento'])); ?></dd>

                  <dt>Valor Total:</dt>
                  <dd><i class="fa fa-usd" aria-hidden="true"></i> <?php echo $financial['valor_total']; ?></dd>

                  <dt class="hidden-xs">Data de Cadastro:</dt>
                  <dd class="hidden-xs"><?php echo date('d/m/Y H:i:s', strtotime($financial['created'])); ?></dd>
                </dl>

                <div id="actions" class="row">
                  <div class="col-md-12 botoesviews">
                    <a href="edit.php?id=<?php echo $financial['id']; ?>" class="btn btn-primary">Editar</a>
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