              <?php
                require_once('cabecalho.php');
                require_once('functions.php'); 
                add();
              ?>

              <h2 class="titulo">Novo Produto</h2>

              <form action="add.php" method="post">
                <!-- area de campos do form -->
                <hr />
                <br>
                <div class="row">
                  <div class="form-group col-md-6 col-lg-7">
                    <label for="name">Descrição Principal</label>
                    <input type="text" class="form-control" id="name" name="product['descricao_principal']" placeholder="Ex.: Raçao para Cão" maxlength="30" required>
                  </div>

                  <div class="form-group col-sm-6 col-md-2">
                    <label for="codigo">Código</label>
                    <input type="number" class="form-control" id="codigo" name="product['codigo']" minlength="1" placeholder="000001">
                  </div>

                  <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="product['categoria']" placeholder="Ex.: Grande Porte | 3kg" required>
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-sm-6 col-md-3 col-lg-4">
                    <label for="tipoproduto">Tipo do Produto</label>
                    <select class="form-control" id="tipoproduto" name="product['tipo_produto']">
                      <option selected disabled>Selecione</option>
                      <option value="0">Normal</option>
                      <option value="1">Grande</option>
                      <option value="2">Kit</option>
                    </select>
                  </div>

                  <div class="form-group col-sm-6 col-md-3 col-lg-4">
                    <label for="fornecedor">Fornecedor</label>
                    <input type="text" class="form-control" id="fornecedor" name="product['fornecedor']" placeholder="Special Dog" required maxlength="20">
                  </div>
                  
                  <div class="form-group col-sm-6 col-md-3 col-lg-2">
                    <label for="venda">Valor de Venda</label>
                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="number" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="venda" name="product['valor_venda']" placeholder="R$ 00,00" required>
                    </div>
                  </div>
                  
                  <div class="form-group col-sm-6 col-md-3 col-lg-2">
                    <label for="campo3">Data de Cadastro</label>
                    <input type="text" class="form-control" name="product['created']" disabled>
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