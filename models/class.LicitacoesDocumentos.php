<?php
/**
 * Modelo de criação de classe padrao em php 4
 */

require_once('Licitacao.php'); //Inclui a classe pai

class LicitacoesDocumentos extends Licitacao{
    var $id_licitacao_documentos;
    var $fk_licitacao;
    var $url_documentos;

    function LicitacoesDocumentos( 
                                    $id_licitacao_documentos, 
                                    $fk_licitacao, 
                                    $url_documentos 
                                 )
    {
        $this->id_licitacao_documentos = $id_licitacao_documentos;
        $this->fk_licitacao = $fk_licitacao;
        $this->url_documentos = $url_documentos;
    }
}
