              <?php
                require_once('cabecalho.php');
                require_once('functions.php'); 
                add();
              ?>

              <h2 class="titulo">Novo Cliente</h2>
    
              <form action="add.php" method="post">
                <!-- area de campos do form -->
                <hr />
                <br>
                <div class="row">
                  <div class="form-group col-md-5 ">
                    <label for="name">Nome / Razão Social</label>
                    <input type="text" class="form-control" id="name" name="customer['name']" maxlength="40" placeholder="Fulano de Tal" required>
                  </div>

                  <div class="form-group col-sm-6 col-md-3">
                    <label for="cpf">CNPJ / CPF</label>
                    <input type="text" class="form-control" id="cpf" name="customer['cpf_cnpj']" minlength="14" placeholder="123.456.789-00" required>
                  </div>

                  <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <label for="nascimento">Data de Nascimento</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      <input type="date" class="form-control"  id="nascimento" name="customer['birthdate']" required>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-sm-6 col-md-5 col-lg-5">
                    <label for="endereco">Endereço</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-address-book-o"></i></span>
                      <input type="text" class="form-control" id="endereco" maxlength="40" name="customer['address']" placeholder="Rua da Web, 123" required>
                    </div>
                  </div>

                  <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" maxlength="40" name="customer['hood']" placeholder="Centro" required>
                  </div>
                  
                  <div class="form-group col-sm-6 hidden-md col-lg-2">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="customer['zip_code']" minlength="9" placeholder="37120-000" required>
                  </div>
                  
                  <div class="form-group col-sm-6 col-md-3 col-lg-2">
                    <label for="campo3">Data de Cadastro</label>
                    <input type="text" class="form-control" name="customer['created']" disabled>
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <label for="municipio">Município</label>
                    <input type="text" class="form-control" id="municipio" name="customer['city']" maxlength="30" placeholder="Paraguaçu" required>
                  </div>
                  
                  <div class="form-group col-sm-6 col-md-3 col-lg-2">
                    <label for="telefone">Celular</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-mobile fa-lg"></i></span>
                      <input type="text" class="form-control input-medium bfh-phone" data-format=" dddd-dddd" id="telefone" name="customer['phone']" >
                    </div>
                  </div>
                  
                  <div class="form-group col-sm-5 col-md-3 col-lg-2">
                    <label for="celular">Telefone</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                      <input type="text" class="form-control input-medium bfh-phone" id="celular" data-format=" dddd-dddd " name="customer['mobile']" required>
                    </div>
                  </div>
                  
                  <div class="form-group col-sm-3 col-md-2">
                    <label for="uf">UF</label>
                    <input type="text" class="form-control" id="uf" name="customer['state']" maxlength="2" placeholder="Ex. SP" required>
                  </div>
                  
                  <div class="form-group col-sm-4 hidden-md col-lg-3">
                    <label for="ie">Inscrição Estadual</label>
                    <input type="text" class="form-control" id="ie" name="customer['ie']" maxlength="11" placeholder="52056191" >
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