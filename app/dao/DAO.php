<?php

abstract class DAO{
    protected $conexao;

    public function __construct(){
        $dns = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['name'];
    
        $this->conexao = new PDO($dns, $_ENV['db']['user'], $_ENV['db']['password']);
    }
}


/* 
insert into combustivel(nome) values ('diesel');
insert into combustivel(nome) values ('gasolina');

    insert into marca(nome) values ('alguma_marca');
    insert into marca(nome) values ('outra_marca');

    insert into marca(nome) values ('ford');
    insert into marca(nome) values ('BMW');

    insert into tipo(nome) values ('Passeio');
*/