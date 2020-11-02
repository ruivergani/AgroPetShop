                <?php
                  require_once('cabecalho.php');
                  require_once('functions.php'); 
                  view($_GET['id']);
                ?>


                <h2 class="titulo">Cliente: <i><?php echo $customer['name']; ?></i></h2>
                <hr>
                <br>

                <dl class="dl-horizontal">
                  <dt>Nome:</dt>
                  <dd><?php echo $customer['name']; ?></dd>

                  <dt>CPF / CNPJ:</dt>
                  <dd><?php echo $customer['cpf_cnpj']; ?></dd>

                  <dt class="hidden-xs">Data de Nascimento:</dt>
                  <dd class="hidden-xs"><?php echo date('d/m/Y', strtotime($customer['birthdate'])); ?></dd>
                </dl>

                <dl class="dl-horizontal">
                  <dt>Endereço:</dt>
                  <dd><?php echo $customer['address']; ?></dd>

                  <dt>Bairro:</dt>
                  <dd><?php echo $customer['hood']; ?></dd>

                  <dt>CEP:</dt>
                  <dd><?php echo $customer['zip_code']; ?></dd>

                  <dt class="hidden-xs">Data de Cadastro:</dt>
                  <dd class="hidden-xs"><?php echo date('d/m/Y H:i:s', strtotime($customer['created'])); ?></dd>
                </dl>

                <dl class="dl-horizontal">
                  <dt>Cidade:</dt>
                  <dd><?php echo $customer['city']; ?></dd>

                  <dt>Telefone:</dt>
                  <dd><?php echo $customer['phone']; ?></dd>

                  <dt>Celular:</dt>
                  <dd><?php echo $customer['mobile']; ?></dd>

                  <dt>UF:</dt>
                  <dd><?php echo $customer['state']; ?></dd>

                  <dt class="hidden-xs">Inscrição Estadual:</dt>
                  <dd class="hidden-xs"><?php echo $customer['ie']; ?></dd>
                </dl>

                <div id="actions" class="row">
                  <div class="col-md-12 botoesview">
                    <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
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