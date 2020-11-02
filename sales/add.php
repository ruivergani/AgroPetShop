              <?php
                require_once('cabecalho.php');
                require_once('functions.php'); 
                add();
              ?>

              <h2 class="titulo">Nova Venda</h2>

              <form action="add.php" method="post">
                <hr/>
                <br>
                <div class="row">

                  <div class="form-group col-sm-6 col-md-3">
                    <label for="name">Cliente</label>
                    <select class="form-control" id="dev-table" name="sale['cliente']">
                    <option value="0" disabled selected>Selecionar</option>
                      <?php
                        $costumers = listaCustomers();
                        foreach($costumers as $sale) :
                          $KNome=KNome($sale["id"]);
                          echo '<option value='.$sale["id"].'>'.$KNome[0].'</option>';
                        endforeach
                      ?>
                    </select>
                  </div>

                  <div class="form-group col-sm-6 col-md-3">
                    <label for="name">Produto</label>
                    <select class="form-control" name="sale['produto']" id="dev-table">
                    <option value="0" selected disabled>Selecionar</option>
                      <?php
                        $costumers = listaProdutos();
                        $i=-1;
                        foreach($costumers as $sale) :
                          $i++;
                          echo '<option value='.$costumers[$i][1].'>'.$costumers[$i][0].'</option>';
                        endforeach
                      ?>
                    </select>
                  </div>
                  
                  <div class="form-group col-sm-6 col-md-3">
                    <label for="name">Vendedor</label>
                    <select class="form-control" name="sale['vendedor']" id="dev-table">
                    <option value="0" disabled selected>Selecionar</option>
                      <?php
                        $costumers = listaVendedores();
                        $i=-1;
                        foreach($costumers as $sale) :
                          $i++;
                          echo '<option value='.$costumers[$i][1].'>'.$costumers[$i][0].'</option>';
                        endforeach
                      ?>
                    </select>
                  </div>

                  <div class="form-group col-sm-6 col-md-2">
                    <label for="venda">Valor da Venda</label>
                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="number" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="venda" name="sale['valor_venda']" placeholder="R$ 00,00" required>
                    </div>
                  </div>
                </div>
        
                <div class="row">
                  <div class="form-group col-sm-6 col-md-3">
                    <label for="formapagamento">Forma de Pagamento</label>
                    <select class="form-control" id="formapagamento" name="sale['forma_pagamento']">
                      <option selected disabled>Selecione</option>
                      <option value="3">Dinheiro</option>
                      <option value="4">Cartão de Crédito</option>
                      <option value="5">Cartão de Débito</option>
                      <option value="6">Cheque</option>
                      <option value="7">Carnê</option>
                      <option value="8">Duplicata</option>
                    </select>
                  </div>
                  
                  <div class="form-group col-sm-6 hidden-md col-lg-2">
                    <label for="campo3">Data da Venda</label>
                    <input type="text" id="campo3" class="form-control" name="sale['created']" disabled>
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