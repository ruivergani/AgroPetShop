<?php
require_once("cabecalho.php");
?>
<link rel="stylesheet" type="text/css" href="css/style.css">

<section>
  <div class="row">
    <div class="col-sm-12">
        <div class="section-title">
          <h1 class="text-center titulo">Equipe de Desenvolvedores.</h1>
          <hr id="hr">
          <i><p class="text-center" style="font-family: 'Roboto Slab', serif; font-size: 15px;">Em breve será respondido.</p></i>
        </div>
    </div>
  </div>
  <br>
  <br>
    <div class="row">
      <div class="col-lg-offset-2">

        <div class="col-sm-4 col-lg-3" id="cardsgeral">
            <div class="card">
                <div class="avatar">
                    <img src="img/eu.jpg" alt="" class="img-responsive center-block img-rounded" />
                </div>
                <br>
                <p>Rui Vergani Neto</p>
                <hr id="hr2">
                <div class="content">
                    <p>Desenvolvedor Web!</p>
                    <p><button type="button" class="btn btn-default active" data-toggle="modal" data-target="#ModalRui">Contato</button></p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-lg-3"  id="cardsgeral">
            <div class="card center-block">
                <div class="avatar">
                    <img src="img/jaque.jpg" width="180" height="70" alt="" class="img-responsive center-block img-rounded" />
                </div>
                <br>
                <p>Jaquelyne Alves dos Santos</p>
                <hr id="hr2">
                <div class="content">
                    <p>Programadora Júnior!</p>
                    <p><button type="button" class="btn btn-default active" data-toggle="modal" data-target="#ModalJaque">Contato</button></p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-lg-3"  id="cardsgeral">
            <div class="card center-block">
                <div class="avatar">
                    <img src="img/davi.jpg" width="180" alt="" class="img-responsive center-block img-rounded" />
                </div>
                <br>
                <p>Davi Martins de Sousa</p>
                <hr id="hr2">
                <div class="content">
                    <p>Programador Júnior!</p>
                    <p><button type="button" class="btn btn-default active" data-toggle="modal" data-target="#ModalDavi">Contato</button></p>
                </div>
            </div>
        </div>
      </div>

<!-- Modals dos Criadores -->
<!-- Modal -->
  <div class="modal fade" id="ModalRui" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-graduation-cap"> Rui Vergani Neto | Técnico em Informática</i></h4>
        </div>
        <div class="modal-body">
          <p> Instituto Federal de Ciência, Educação e Tecnologia do Sul de Minas Gerais.</p>
          <p> E-mail: vergani.neto@gmail.com</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal Jaque-->
  <div class="modal fade" id="ModalJaque" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-graduation-cap"> Jaquelyne Alves | Técnica em Informática</i></h4>
        </div>
        <div class="modal-body">
          <p> Instituto Federal de Ciência, Educação e Tecnologia do Sul de Minas Gerais.</p>
          <p> E-mail: jaquelyne.pf23@gmail.com</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Davi -->
  <div class="modal fade" id="ModalDavi" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-graduation-cap"> Davi Martins | Técnico em Informática</i></h4>
        </div>
        <div class="modal-body">
          <p> Instituto Federal de Ciência, Educação e Tecnologia do Sul de Minas Gerais.</p>
          <p> E-mail: davi470063@gmail.com</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  
</div>


</section>
<?php
require_once("topo.php");
?>