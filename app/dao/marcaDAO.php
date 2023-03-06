<?php

include 'dao/DAO.php';

class marcaDAO extends DAO{
    public function selectMarca(){
        $query = $this->conexao->query("select * from marca");
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
}