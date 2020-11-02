<?php
require_once('../config.php');
require_once(DBAPI);

$financials = null;
$financial = null;

/**
 *  Listagem de Financeiro
 */
function index() {
  global $financials;
  $financials = find_all('financials');
}

/**
 *  Cadastro de Financeiro
 */
function add() {

  if (!empty($_POST['financial'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $financial = $_POST['financial'];
    $financial['modified'] = $financial['created'] = $today->format("Y-m-d H:i:s");
    
    save('financials', $financial);
     echo "<script>location.href='index.php'</script>";

  }
}

/**
 *  Atualizacao/Edicao de Financeiro
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['financial'])) {

      $financial = $_POST['financial'];
      $financial['modified'] = $now->format("Y-m-d H:i:s");

      update('financials', $id, $financial);
      echo "<script>location.href='index.php'</script>";
    } else {

      global $financial;
      $financial = find('financials', $id);
    } 
  } else {
     echo "<script>location.href='index.php'</script>";
  }
}

/**
 *  Visualização de um Financeiro
 */
function view($id = null) {
  global $financial;
  $financial = find('financials', $id);
}

/**
 *  Exclusão de um Financeiro
 */
function delete($id = null) {

  global $financial;
  $financial = remove('financials', $id);

  header('location: index.php'); 
}
?>