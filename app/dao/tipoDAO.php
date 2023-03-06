<?php

class tipoDAO extends DAO{
    public function selecTipo(){
        $query = $this->conexao->query("select * from tipo");
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
}