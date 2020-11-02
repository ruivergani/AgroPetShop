              <?php
                require_once('cabecalho.php');
                require_once('functions.php'); 
                add();
              ?>

              <h2 class="titulo" style="color: #5cb85c;">Conta a Receber</h2>

              <form action="add.php" method="post">
                <!-- area de campos do form -->
                <hr />
                <br>
                <div class="row">
                  <div class="form-group col-sm-6 col-md-3">
                    <label for="name">Descrição Principal</label>
                    <input type="text" class="form-control" id="name" name="financial['descricao_principal']" placeholder="Ex.: Conta de Luz" maxlength="30" required>
                  </div>

                 <div class="form-group col-sm-6 col-md-3">
                    <label for="tipoconta">Tipo de Conta</label>
                    <select class="form-control" id="tipoconta" name="financial['tipo_conta']" required>
                      <option value="1" selected>Entrada (Crédito)</option>
                      <option value="2" disabled>Saida (Débito)</option>
                    </select>
                 </div>

                  <div class="form-group col-sm-6 col-md-3">
                    <label for="formapagamento">Forma de Pagamento</label>
                    <select class="form-control" id="formapagamento" name="financial['forma_pagamento']">
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
                    <select class="form-control" id="entidade" name="financial['entidade']">
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
                      <input type="date" class="form-control"  id="vencimento" name="financial['data_vencimento']" required>
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
                      <input type="number" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="venda" name="financial['valor_total']" placeholder="R$ 00,00" required>
                    </div>
                  </div>
                  
                  <div class="form-group col-sm-6 hidden-md col-lg-2">
                    <label for="campo3">Data de Cadastro</label>
                    <input type="text" id="campo3" class="form-control" name="financial['created']" disabled>
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