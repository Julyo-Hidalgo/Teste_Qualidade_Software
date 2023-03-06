<?php

class fabricanteDAO extends DAO{
    public function selectFabricante(){
        $query = $this->conexao->query("select * from fabricante");
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
}