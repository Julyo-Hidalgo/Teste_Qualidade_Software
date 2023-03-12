<?php

include 'dao/DAO.php';

class veiculoDAO extends DAO{
    public function insert(formModel $model){
        $sql = "insert into veiculo(modelo, id_combustivel, cor, observacoes, kilometragem, id_marca, id_tipo, id_fabricante, ano, chassi, revisao, sinistro, roubo_furto, aluguel, venda, particular) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->modelo);
        $stmt->bindValue(2, $model->id_combustivel);
        $stmt->bindValue(3, $model->cor);
        $stmt->bindValue(4, $model->observacoes);
        $stmt->bindValue(5, $model->kilometragem);
        $stmt->bindValue(6, $model->id_marca);
        $stmt->bindValue(7, $model->id_tipo);
        $stmt->bindValue(8, $model->id_fabricante);
        $stmt->bindValue(9, $model->ano);
        $stmt->bindValue(10, $model->chassi);
        $stmt->bindValue(11, $model->revisao);
        $stmt->bindValue(12, $model->sinistro);
        $stmt->bindValue(13, $model->roubo_furto);
        $stmt->bindValue(14, $model->aluguel);
        $stmt->bindValue(15, $model->venda);
        $stmt->bindValue(16, $model->particular);

        $stmt->execute();
    }
}