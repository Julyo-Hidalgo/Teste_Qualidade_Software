<?php

class formModel{
    public $id, $modelo, $cor, $chassi, $kilometragem, $ano, $revisao, $roubo_furto, $aluguel, $venda, $sinistro, $particular, $observacoes, $id_tipo, $id_marca, $id_combustivel, $id_fabricante;


    public function save(){
        include 'dao/veiculoDAO.php';
        $dao = new veiculoDAO();
        $dao->insert($this);
    }

    public static function getCheckbox($value){
        if ($value <> null){
            return 1;
        }
        else{
            return 0;
        }
    }
}