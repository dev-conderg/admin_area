
<?php

// Inclui a classe que trata os dados
require_once('../../models/class.Licitacao.php');
// include("../../models/class.Licitacao.php");
require_once('../../data/data.Licitacao.php');


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        /**
         * objeto instanciado
         */
        // $licitacao = new Licitacao();
        /**
         * Variáveis que chegham do formulario
         * isset->verifica se a variavwel esta vazia ou nula
         * trim->retira os espacos
         */
        $titulo = isset($_POST['titulo']) ? trim($_POST['titulo']) : '';
        $data_publicacao = isset($_POST['data_publicacao']) ? trim($_POST['data_publicacao']) : '';
        $data_edital = isset($_POST['data_edital']) ? trim($_POST['data_edital']) : '';
        $descritivo = isset($_POST['descritivo']) ? trim($_POST['descritivo']) : '';
        $arquivos_url = isset($_POST['arquivos_url']) ? trim($_POST['arquivos_url']) : '';
        
        
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
            
            $licitacao = new Licitacao('',$titulo,$data_publicacao,$data_edital,$descritivo);

            // Aqui você pode salvar no banco ou continuar o processamento
        }
    }

