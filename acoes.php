<?php 

include "db.php";

function salvarCEP($cep,$logadouro,$bairro,$localidade,$uf,$estado,$regiao,$ddd){
    global $conexao;

    $sql = "INSERT INTO `enderecos`(`cep`, `logradouro`, `bairro`, `localidade`, `uf`, `estado`, `regiao`, `ddd`) VALUES ('$cep','$logadouro','$bairro','$localidade','$uf','$estado','$regiao','$ddd')";

    $resultados = $conexao->query($sql);

}
function buscarTabela($tabela) {
    global $conexao;
    $sql = "SELECT * FROM $tabela";
    $resultados = $conexao->query($sql);
    return $resultados;
}
?>