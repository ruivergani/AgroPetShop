<?php
require_once('../config.php');
require_once(DBAPI);

$customers = null;
$customer = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all('customers');
}

/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['customer'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $customer = $_POST['customer'];
    $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
    
    save('customers', $customer);
     echo "<script>location.href='index.php'</script>";

  }
}

/**
 *  Atualizacao/Edicao de Cliente
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['customer'])) {

      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");

      update('customers', $id, $customer);
      echo "<script>location.href='index.php'</script>";
    } else {

      global $customer;
      $customer = find('customers', $id);
    } 
  } else {
     echo "<script>location.href='index.php'</script>";
  }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $customer;
  $customer = find('customers', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $customer;
  $customer = remove('customers', $id);

  header('location: index.php'); 
}
?>