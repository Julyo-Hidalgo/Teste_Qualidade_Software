<?php

class formDAO{
    private $conexao;

    public function __construct(){
        $dns = "mysql:host=localhost:3306;dbname=mydb";
        $this->conexao = new PDO($dns, 'root', 'password');
    }

    public function selectCombustivel(){
        $query = $this->conexao->query("select * from combustivel");
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }

    public function insert(formModel $model){
        $sql = "insert into veiculo(modelo, combustivel) values (?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->modelo);
        $stmt->bindValue(2, (int)$model->id_combustivel);

        $stmt->execute();
    }
}