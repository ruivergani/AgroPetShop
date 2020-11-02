                <?php
                  require_once('cabecalho.php');
                  require_once('functions.php'); 
                  edit();
                ?>

                <h2 class="titulo">Atualizar Conta</h2>

                <form action="edit.php?id=<?php echo $financial['id']; ?>" method="post">
                  <hr/>
                  <br>
                  <div class="row">

                    <div class="form-group col-sm-6 col-md-3">
                      <label for="name">Descrição Principal</label>
                      <input type="text" class="form-control" id="name" name="financial['descricao_principal']" value="<?php echo $financial['descricao_principal']; ?>">
                    </div>
                    
                    <div class="form-group col-sm-6 col-md-3">
                    <label for="tipoconta">Tipo de Conta</label>
                    <select class="form-control" id="tipoconta" name="financial['tipo_conta']" value="<?php echo $financial['tipo_conta'];?>">
                      <option selected disabled>Selecione</option>
                      <option value="1">Entrada (Crédito)</option>
                      <option value="2">Saida (Débito)</option>
                    </select>
                 </div>

                  <div class="form-group col-sm-6 col-md-3">
                    <label for="formapagamento">Forma de Pagamento</label>
                    <select class="form-control" id="formapagamento" name="financial['forma_pagamento']" value="<?php echo $financial['forma_pagamento'];?>">
                      <option selected disabled>Selecione</option>
                      <option value="3">Dinheiro</option>
                      <option value="4">Cartão de Crédito</option>
                      <option value="5">Cartão de Débito</option>
                      <option value="6">Cheque</option>
                      <option value="7">Carnê</option>
                      <option value="8">Duplicata</option>
                    </select>
                  </div>
                  
                  <div class="form-group col-sm-6 col-md-3">
                    <label for="entidade">Entidade</label>
                    <select class="form-control" id="entidade" name="financial['entidade']" value="<?php echo $financial['entidade'];?>">
                      <option selected disabled>Selecione</option>
                      <option value="9">Cliente</option>
                      <option value="10">Fornecedor</option>
                      <option value="11">Transportador</option>
                      <option value="12">Funcionário</option>
                      <option value="13">Outros</option>
                    </select>
                  </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                      <label for="vencimento">Data de Vencimento</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="date" class="form-control"  id="vencimento" name="financial['data_vencimento']" value="<?php echo $financial['data_vencimento']; ?>">
                      </div>
                    </div>

                    <div class="form-group col-sm-6 col-md-4">
                      <label for="func_responsavel">Funcionário Responsável</label>
                      <input type="text" class="form-control" id="func_responsavel" name="financial['funcionario_responsavel']"
                       placeholder="<?= $_SESSION['nome']?>" value="<?= $_SESSION['nome']?>" disabled>
                    </div>

                    <div class="form-group col-sm-6 col-md-3">
                      <label for="venda">Valor Total</label>
                      <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="number" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="venda" name="financial['valor_total']" value="<?php echo $financial['valor_total']; ?>">
                      </div>
                    </div>

                    <div class="form-group col-sm-6 hidden-md col-lg-2">
                      <label for="campo3">Data de Cadastro</label>
                      <input type="text" class="form-control" id="campo3" name="financial['created']" disabled value="<?php echo $financial['created']; ?>">
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