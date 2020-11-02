                <?php
                  require_once('cabecalho.php');
                  require_once('functions.php'); 
                  edit();
                ?>

                <h2 class="titulo">Atualizar Venda</h2>

                <form action="edit.php?id=<?php echo $sale['id']; ?>" method="post">
                  <hr/>
                  <br>
                  <div class="row">

                  <div class="form-group col-sm-6 col-md-3">
                    <label for="name">Cliente</label>
                    <select class="form-control" id="dev-table" name="sale['cliente']">
                      <?php
                        $sales=$sale;
                        $costumers = listaCustomers();
                        $KN=KNome($sale["cliente"]);
                        echo '<option value='.$sale["cliente"].'>'.$KN[0].'</option>';
                        foreach($costumers as $sale) :
                          $KNome=KNome($sale["id"]);
                          if($KN!=$KNome){
                            echo '<option value='.$sale["id"].'>'.$KNome[0].'</option>';
                          }
                        endforeach
                      ?>
                    </select>
                  </div>

                  <div class="form-group col-sm-6 col-md-3">
                    <label for="name">Produto</label>
                    <select class="form-control" name="sale['produto']" id="dev-table">
                    <option selected disabled>
                    <?php
                        $costumers = listaProdutos();
                        //echo $sales['produto'];
                        $i=-1;
                        foreach($costumers as $sale) :
                          $i++;
                          if($sales['produto']==$costumers[$i][1] ){
                            echo $costumers[$i][0];
                          }
                        endforeach
                      ?>
                    </option>
                      <?php
                        $costumers = listaProdutos();
                        $i=-1;
                        foreach($costumers as $sale) :
                          $i++;
                          if($sales['produto']!=$costumers[$i][1] ){
                            echo '<option value='.$costumers[$i][1].'>'.$costumers[$i][0].'</option>';
                          }
                        endforeach
                      ?>
                    </select>
                  </div>
                  
                  <div class="form-group col-sm-6 col-md-3">
                    <label for="name">Vendedor</label>
                    <select class="form-control" name="sale['vendedor']" id="dev-table">
                    <option disabled selected>
                      <?php
                        $costumers = listaVendedores();
                        $i=-1;
                        foreach($costumers as $sale) :
                          $i++;
                          if($sales['vendedor']==$costumers[$i][1] ){
                            echo $costumers[$i][0];
                          }
                        endforeach
                      ?>
                    </option>
                      <?php
                        $costumers = listaVendedores();
                        $i=-1;
                        foreach($costumers as $sale) :
                          $i++;
                          if($sales['vendedor']!=$costumers[$i][1] ){
                            echo '<option value='.$costumers[$i][1].'>'.$costumers[$i][0].'</option>';
                          }
                        endforeach
                      ?>
                    </select>
                  </div>

                  <div class="form-group col-sm-6 col-md-2">
                    <label for="venda">Valor da Venda</label>
                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="number" class="form-control" name="sale['valor_venda']" value="<?php echo $sale['valor_venda']; ?>">
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