<?php

class combustivelDAO extends DAO{
    public function selectCombustivel(){
        $query = $this->conexao->query("select * from combustivel");
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
}