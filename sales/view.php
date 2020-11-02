                <?php
                  require_once('cabecalho.php');
                  require_once('functions.php'); 
                  view($_GET['id']);
                ?>


                <h2 class="titulo">Valor da Venda: <i><i class="fa fa-usd" aria-hidden="true"></i><?php echo $sale['valor_venda']; ?></i></h2>
                <hr>
                <br>

                <dl class="dl-horizontal">
                  <dt>Cliente</dt>
                  <dd><?php $KNome=KNome($sale['cliente']); echo $KNome[0]; ?></dd>

                  <dt>Produto:</dt>
                  <dd><?php $KP=KP($sale['produto']); echo $KP[0];?> </dd>

                  <dt class="hidden-xs">Vendedor:</dt>
                  <dd class="hidden-xs"><?php $KV=KV($sale['vendedor']); echo $KV[0];?></dd>
                </dl>

                <dl class="dl-horizontal">
                  <dt>Data da Venda:</dt>
                  <dd><?php echo date('d/m/Y', strtotime($sale['created'])); ?></dd>
                  
                  <dt>Forma Pagamento:</dt>
                  <dd>
                  <?php 
                    if ($sale['forma_pagamento'] == 3) {
                    echo "Dinheiro";
                   }
                   if ($sale['forma_pagamento'] == 4) {
                    echo "Cartão de Crédito";
                   }
                   if ($sale['forma_pagamento'] == 5) {
                    echo "Cartão de Débito";
                   }
                   if ($sale['forma_pagamento'] == 6) {
                    echo "Cheque";
                   }
                   if ($sale['forma_pagamento'] == 7) {
                    echo "Carnê";
                   }
                   if ($sale['forma_pagamento'] == 8) {
                    echo "Duplicata";
                   }
                   ?></dd>

                  <dt>Valor de Venda:</dt>
                  <dd><i class="fa fa-usd" aria-hidden="true"></i> <?php echo $sale['valor_venda']; ?></dd>
                </dl>

                <div id="actions" class="row">
                  <div class="col-md-12 botoesviews">
                    <a href="edit.php?id=<?php echo $sale['id']; ?>" class="btn btn-primary">Editar</a>
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