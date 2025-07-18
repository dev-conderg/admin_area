<?php

// Inclui a classe que trata os dados
include("../../models/class.Licitacao.php");

try {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        /**
         * objeto instanciado
         */
        $licitacao = new Licitacao();
        /**
         * Variáveis que chegham do formulario
         * isset->verifica se a variavwel esta vazia ou nula
         * trim->retira os espacos
         */
        $titulo = isset($_POST['titulo']) ? trim($POST('titulo')) : '';
        $data_publicacao = isset($_POST['data_publicacao']) ? trim($_POST('data_publicacao')) : '';
        $data_edital = isset($_POST['data_edital']) ? trim($POST('data_edital')) : '';
        $descritivo = isset($_POST['descritivo']) ? trim($POST('descritivo')) : '';
        $arquivos_url = isset($_POST['arquivos_url']) ? trim($POST('arquivos_url')) : '';
        
        /**
         * validação dos dados
         */
        $erros = array();

        if($titulo == ''){
            $erros[] = 'Titulo é obrigatório.';
        }

        if($data_publicacao == ''){
            $erros[] = 'Data de publicação é obrigatória.';
        }

        if($data_edital == ''){
            $erros[] = 'Data de edital é obrigatória.';
        }

        if($descritivo == ''){
            $erros[] = 'Descritivo é obrigatório.';
        }

        if($arquivos_url == ''){
            $erros[] = 'Arquivo é obrigatório.';
        }
        
        if(count($erros) > 0){
            echo "Erros econtrados:<br>";
            foreach ($erros as $erro) {
                echo "- " . $erro . "<br>";
            }
        }else{
            echo "Dados válidos!<br>";
            // Aqui você pode salvar no banco ou continuar o processamento
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}