<style type="text/css">
  /*configuração modal*/
.modal-header{
    background-color: #337AB7;
    color: #fff;
    clear: both;
}
.modal-body{
  color: #000;
  text-align: justify;
}
.modal-footer{
  background-color: #EBEBEB;
  padding-top: 5px;
  padding-bottom: 5px;
}
</style>

<!-- Modal de Delete-->
<div class="modal fade" id="delete-modal-conta" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir esta conta?
      </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-primary" href="#">Confirmar</a>
        <a id="cancel" class="btn btn-default" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->

