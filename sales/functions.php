<?php
require_once('../config.php');
require_once(DBAPI);

$sales = null;
$sale = null;

/**
 *  Listagem de Venda
 */
function index() {
  global $sales;
  $sales = find_all('sales');
}

/**
 *  Cadastro dea Venda
 */
function add() {

  if (!empty($_POST['sale'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $sale = $_POST['sale'];
    $sale['modified'] = $sale['created'] = $today->format("Y-m-d H:i:s");
    
    save('sales', $sale);
     echo "<script>location.href='index.php'</script>";

  }
}

/**
 *  Atualizacao/Edicao dea Venda
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['sale'])) {

      $sale = $_POST['sale'];
      $sale['modified'] = $now->format("Y-m-d H:i:s");

      update('sales', $id, $sale);
      echo "<script>location.href='index.php'</script>";
    } else {

      global $sale;
      $sale = find('sales', $id);
    } 
  } else {
     echo "<script>location.href='index.php'</script>";
  }
}

/**
 *  Visualização de uma Venda
 */
function view($id = null) {
  global $sale;
  $sale = find('sales', $id);
}

/**
 *  Exclusão de uma Venda
 */
function delete($id = null) {

  global $sale;
  $sale = remove('sales', $id);

  header('location: index.php'); 
}

function KNome($id = null) {
  $conexao = conecta_bd();

  $query = "Select name 
        From customers 
        where id  = '$id'";       
  
  $resultado = mysqli_query($conexao, $query);
  $dados = mysqli_fetch_array($resultado);

  return $dados;
}

function KP($id = null) {
  $conexao = conecta_bd();

  $query = "Select descricao_principal
        From products 
        where id  = '$id'";       
  
  $resultado = mysqli_query($conexao, $query);
  $dados = mysqli_fetch_array($resultado);

  return $dados;
}

function KV($id = null) {
  $conexao = conecta_bd();

  $query = "Select nome
        From users 
        where id  = '$id'";       
  
  $resultado = mysqli_query($conexao, $query);
  $dados = mysqli_fetch_array($resultado);

  return $dados;
}

function listaCustomers(){
  $conexao = conecta_bd();
  $customers = array();

  $query = "Select * 
        From customers 
        order by name";       
  
  $resultado = mysqli_query($conexao,$query);

  while($dados = mysqli_fetch_array($resultado)) {
    array_push($customers, $dados);
  }

  return $customers;
}

function listaProdutos(){
  $conexao = conecta_bd();
  $customers = array();

  $query = "Select descricao_principal,id 
        From products 
        order by descricao_principal ";       
  
  $resultado = mysqli_query($conexao,$query);

  while($dados = mysqli_fetch_array($resultado)) {
    array_push($customers, $dados);
  }

  return $customers;
}

function listaVendedores(){
  $conexao = conecta_bd();
  $customers = array();

  $query = "Select nome,id 
        From users 
        order by nome ";       
  
  $resultado = mysqli_query($conexao,$query);

  while($dados = mysqli_fetch_array($resultado)) {
    array_push($customers, $dados);
  }

  return $customers;
}
?>