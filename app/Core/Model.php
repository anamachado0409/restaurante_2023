<?php

namespace Core;

abstract class Model{

    /**
     * Nome da Tabela no banco de dados
     * @var
     */

    protected $table;

    protected $columns = [];

    public function query(string $sql){

        $conn = Connection::getInstance();
        $stm = $conn->prepare($sql);
        $stm->execute();
        return $stm;
    }    
    /**
     * Inserção no banco de dados
     * @return void
     */

    public function insert(){
        //INSERT INTO TABELA (CAMPOS) VALUES (VALORES);
    }

    public function update(){

    }

    public function delete(){

    }

    public function all(){
        $columns = implode(', ',$this->columns);
        $sql = "SELECT $columns FROM $this->table;";
        return $this->query($sql)->fetchAll(\PDO::FETCH_CLASS,get_class($this));
    }
    public function get(){
        $sql = "SELECT * FROM $this->table;";
        return $this->query($sql)->fetch();
    }
}