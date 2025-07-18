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
         */
        $titulo = isset($_POST['titulo']) ? trim($POST('titulo')) : '';
        $data_publicacao = isset($_POST['data_publicacao']) ? trim($_POST('data_publicacao')) : '';
        $data_edital = isset($_POST['data_edital']) ? trim($POST('data_edital')) : '';
        $descritivo = isset($_POST['descritivo']) ? trim($POST('descritivo')) : '';
        $arquivos_url = isset($_POST['arquivos_url']) ? trim($POST('arquivos_url')) : '';
        
        /**
         * validação dos dados
         */
        
        


        
    }
} catch (\Throwable $th) {
    //throw $th;
}