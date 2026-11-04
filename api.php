<?php 

function buscarCEP($cep) {
    if(strlen($cep) === 8) {
        $dados = json_decode(file_get_contents("https://viacep.com.br/ws/$cep/json/"), true);

        if(isset($dados['erro'])) {
            echo "cep não encontrado"; 
        }else {
            return $dados;
        }
    }
}

?>