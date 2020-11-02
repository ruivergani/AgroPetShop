                <?php
                  require_once('cabecalho.php');
                  require_once('functions.php'); 
                  view($_GET['id']);
                ?>


                <h2 class="titulo">Produto: <i><?php echo $product['descricao_principal']; ?></i></h2>
                <hr>
                <br>
                <?php if (!empty($_SESSION['message'])) : ?>
                  <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
                <?php endif; ?>

                <dl class="dl-horizontal">
                  <dt>Descrição Principal</dt>
                  <dd><?php echo $product['descricao_principal']; ?></dd>

                  <dt>Código:</dt>
                  <dd><?php echo $product['codigo']; ?></dd>

                  <dt class="hidden-xs">Categoria:</dt>
                  <dd class="hidden-xs"><?php echo $product['categoria']; ?></dd>
                </dl>

                <dl class="dl-horizontal">
                  <dt>Tipo do Produto:</dt>
                  <dd><?php 
                  if ($product['tipo_produto'] == 0) {
                    echo "Normal";
                  }
                  if ($product['tipo_produto'] == 1) {
                    echo "Grande";
                  }
                  if ($product['tipo_produto'] == 2) {
                    echo "Kit";
                  }
                  ?></dd>

                  <dt>Fornecedor:</dt>
                  <dd><?php echo $product['fornecedor']; ?></dd>

                  <dt>Valor Venda:</dt>
                  <dd><i class="fa fa-usd" aria-hidden="true"></i> <?php echo $product['valor_venda']; ?></dd>

                  <dt class="hidden-xs">Data de Cadastro:</dt>
                  <dd class="hidden-xs"><?php echo date('d/m/Y H:i:s', strtotime($product['created'])); ?></dd>
                </dl>

                <div id="actions" class="row">
                  <div class="col-md-12 botoesviews">
                    <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Editar</a>
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