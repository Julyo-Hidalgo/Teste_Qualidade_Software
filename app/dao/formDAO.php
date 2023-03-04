<?php

class formDAO{
    private $conexao;

    public function __construct(){
        $dns = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['name'];
    
        $this->conexao = new PDO($dns, $_ENV['db']['user'], $_ENV['db']['password']);
    }

    public function selectCombustivel(){
        $query = $this->conexao->query("select * from combustivel");
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }

    public function insert(formModel $model){
        $sql = "insert into veiculo(modelo, id_combustivel, cor, observacoes, kilometragem) values (?, ?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->modelo);
        $stmt->bindValue(2, $model->id_combustivel);
        $stmt->bindValue(3, $model->cor);
        $stmt->bindValue(4, $model->observacoes);
        $stmt->bindValue(5, $model->kilometragem);
        $stmt->execute();
    }
}

/* insert into combustivel(nome) values ('diesel');
insert into combustivel(nome) values ('gasolina');
*/