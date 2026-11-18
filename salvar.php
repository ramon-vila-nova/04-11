<?php 
include "api.php";


if($_SERVER['REQUEST_METHOD'] == "POST") {
    echo $_POST['cep'];
    $endereco = buscarCEP($cep);

    salvarCEP($endereco['cep'], $endereco['logradouro'], $endereco['bairro'], $endereco['localidade'], $endereco['uf'], $endereco['estado'], $endereco['regiao'], $endereco['ddd']);

    $voltar = $_SERVER['HTTP_REFERER'] ?? "index.php";
    header("Location: $voltar");
    exit;
}

?>