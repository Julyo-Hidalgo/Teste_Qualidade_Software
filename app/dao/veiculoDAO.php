<?php

include 'dao/DAO.php';

class veiculoDAO extends DAO{
    public function insert(formModel $model){
        $sql = "insert into veiculo(modelo, id_combustivel, cor, observacoes, kilometragem, id_marca, ano) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->modelo);
        $stmt->bindValue(2, $model->id_combustivel);
        $stmt->bindValue(3, $model->cor);
        $stmt->bindValue(4, $model->observacoes);
        $stmt->bindValue(5, $model->kilometragem);
        $stmt->bindValue(6, $model->id_marca);
        $stmt->bindValue(7, $model->id_tipo);
        $stmt->bindValue(8, $model->id_fabricante);

        $stmt->execute();
    }
}