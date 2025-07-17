<?php

/**
 * Classe reponsavel pela modelagem do objeto
 */
class Licitacao{
    var $id_licitacao;
    var $titulo;
    var $dt_publicacao;
    var $dt_edital;
    var $dt_ano;
    var $descricao_obj_licitacao;
    
    /**
     * Construtor do Objeto
     */
    function Licitacao(
                        $id_licitacao, 
                        $titulo, 
                        $dt_publicacao, 
                        $dt_edital, 
                        $dt_ano, 
                        $descricao_obj_licitacao 
                      ) 
    {
        /**
         * A variavel id_licitacao sempre inicia com 0
         * pois a responsabilidade de criar um id unico 
         * e do banco de dados
         */
        $this->id_licitacao = 0;
        $this->titulo = $titulo;
        $this->dt_publicacao = $dt_publicacao;
        $this->dt_edital = $dt_edital;
        $this->dt_ano = $dt_ano;
        $this->descricao_obj_licitacao = $descricao_obj_licitacao;
    }
}




