                <?php
                  require_once('cabecalho.php');
                  require_once('functions.php'); 
                  edit();
                ?>

                <h2 class="titulo">Atualizar Produto</h2>

                <form action="edit.php?id=<?php echo $product['id']; ?>" method="post">
                  <hr />
                  <br>
                  <div class="row">
                    <div class="form-group col-md-6 col-lg-7">
                      <label for="name">Descrição Principal</label>
                      <input type="text" class="form-control" id="name" name="product['descricao_principal']" value="<?php echo $product['descricao_principal']; ?>">
                    </div>

                    <div class="form-group col-sm-6 col-md-2">
                      <label for="codigo">Código</label>
                      <input type="text" class="form-control" id="codigo" name="product['codigo']"" value="<?php echo $product['codigo']; ?>">
                    </div>

                    <div class="form-group col-sm-6 col-md-3 col-lg-3">
                      <label for="categoria">Categoria</label>
                      <input type="text" class="form-control" id="categoria" name="product['categoria']" value="<?php echo $product['categoria']; ?>">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-sm-6 col-md-3 col-lg-4">
                      <label for="tipoproduto">Tipo do Produto</label>
                      <select class="form-control" id="tipoproduto" name="product['tipo_produto']" value="<?php echo $product['tipo_produto'];?>">
                        <option value="0">Normal</option>
                        <option value="1">Grade</option>
                        <option value="2">Kit</option>
                      </select>
                    </div>

                    <div class="form-group col-sm-6 col-md-3 col-lg-4">
                      <label for="fornecedor">Fornecedor</label>
                      <input type="text" class="form-control" id="fornecedor" name="product['fornecedor']" value="<?php echo $product['fornecedor']; ?>">
                    </div>

                    <div class="form-group col-sm-6 col-md-3 col-lg-2">
                      <label for="venda">Valor Venda</label>
                      <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="number" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="venda" name="product['valor_venda']" value="<?php echo $product['valor_venda']; ?>">
                      </div>
                    </div>

                    <div class="form-group col-sm-6 col-md-3 col-lg-2">
                      <label for="campo3">Data de Cadastro</label>
                      <input type="text" class="form-control" id="campo3" name="product['created']" disabled value="<?php echo $product['created']; ?>">
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