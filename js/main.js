/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Cliente: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
/**
 * Passa os dados do produto para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-product').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Produto: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
/**
 * Passa os dados do usuário para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-user').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Usuário: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
/**
 * Passa os dados da Conta para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-conta').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Conta: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
/**
 * Passa os dados da Venda para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-venda').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Venda: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})