                <?php
                  require_once('cabecalho.php');
                  require_once('functions.php'); 
                  edit();
                ?>

                <h2 class="titulo">Atualizar Cliente</h2>

                <form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
                  <hr />
                  <br>
                  <div class="row">
                    <div class="form-group col-md-5 col-lg-7">
                      <label for="name">Nome / Razão Social</label>
                      <input type="text" class="form-control" name="customer['name']" id="name" maxlength="40" value="<?php echo $customer['name']; ?>">
                    </div>

                    <div class="form-group col-sm-6 col-md-3 col-lg-2">
                      <label for="cpf">CNPJ / CPF</label>
                      <input type="text" class="form-control" id="cpf" name="customer['cpf_cnpj']" minlength="14" value="<?php echo $customer['cpf_cnpj']; ?>">
                    </div>

                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <label for="nascimento">Data de Nascimento</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      <input type="date" class="form-control"  id="nascimento" name="customer['birthdate']" value="<?php echo $customer['birthdate']; ?>">
                    </div>
                   </div>
                  </div>

                  <div class="row">

                    <div class="form-group col-sm-6 col-md-5 col-lg-5">
                    <label for="endereco">Endereço</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-address-book-o"></i></span>
                      <input type="text" class="form-control" id="endereco" maxlength="40" name="customer['address']" value="<?php echo $customer['address']; ?>">
                    </div>
                  </div>

                  <div class="form-group col-sm-6 col-md-4 col-lg-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" maxlength="40" name="customer['hood']"  value="<?php echo $customer['hood']; ?>" >
                  </div>
                  
                  <div class="form-group col-sm-6 hidden-md col-lg-2">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="customer['zip_code']" minlength="9" value="<?php echo $customer['zip_code']; ?>" >
                  </div>
                  
                  <div class="form-group col-sm-6 col-md-3 col-lg-2">
                    <label for="campo3">Data de Cadastro</label>
                    <input type="text" class="form-control" name="customer['created']" value="<?php echo $customer['created']; ?>" disabled>
                  </div>

                  </div>

                  <div class="row">
                    <div class="form-group col-sm-6 col-md-4 col-lg-3">
                      <label for="municipio">Município</label>
                      <input type="text" class="form-control" id="municipio" name="customer['city']" maxlength="30" value="<?php echo $customer['city']; ?>">
                    </div>

                    <div class="form-group col-sm-6 col-md-3 col-lg-2">
                      <label for="telefone">Celular</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-mobile fa-lg"></i></span>
                        <input type="text" class="form-control input-medium bfh-phone" data-format=" dddd-dddd"  value="<?php echo $customer['phone']; ?>" id="telefone" name="customer['phone']" >
                      </div>
                    </div>

                     <div class="form-group col-sm-5 col-md-3 col-lg-2">
                      <label for="celular">Telefone</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                        <input type="text" class="form-control input-medium bfh-phone" id="celular" data-format=" dddd-dddd " name="customer['mobile']" value="<?php echo $customer['mobile']; ?>">
                      </div>
                    </div>

                    <div class="form-group col-sm-3 col-md-2">
                      <label for="uf">UF</label>
                      <input type="text" class="form-control" id="uf" name="customer['state']" maxlength="2" value="<?php echo $customer['state']; ?>">
                    </div>

                     <div class="form-group col-sm-4 hidden-md col-lg-3">
                      <label for="ie">Inscrição Estadual</label>
                      <input type="text" class="form-control" id="ie" name="customer['ie']" maxlength="11" value="<?php echo $customer['ie']; ?>">
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