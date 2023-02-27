<?php

class formModel{
    public $id, $modelo, $cor, $chassi, $kilometragem, $ano, $revisao, $roubo_furto, $aluguel, $venda, $sinistro, $particular, $observacoes, $id_tipo, $id_marca, $id_combustivel, $id_fabricante;


    public function save(){
        include 'dao/formDAO.php';
        $dao = new formDAO();
        $dao->insert($this);
    }
}