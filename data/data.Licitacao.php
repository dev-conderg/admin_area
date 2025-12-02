<?php

/** 
 * Importa a conexão
 * que ja esta setada 
 * no arquivo config.php
*/
require_once __DIR__ . '../../config/config.php';

// $sql = "INSERT INTO usuarios(nome,email)" 
//             . "VALUES ('joao','joao@gmail.com')"; 

class dataLicitacao{
    public function createLicitacao(
                                    $id_licitacao, 
                                    $titulo, 
                                    $dt_publicacao, 
                                    $dt_edital, 
                                    $dt_ano, 
                                    $descritivo, 
                                    $arquivos_url
                                    )
    {
    
    }
}

$sql = "INSERT INTO `tbl_licitacoes`"
            . "(`id_licitacao`," 
            . "`titulo`,"
            . "`dt_publicado`,"
            . "`dt_edital`,"
            . "`dt_ano`,"
            . "`obj_licitacao`)" 
            . "VALUES"
            . "('',"
            . "'[value-2]',"
            . "'[value-3]',"
            . "'[value-4]',"
            . "'[value-5]',"
            . "'[value-6]')";

echo $sql;    




