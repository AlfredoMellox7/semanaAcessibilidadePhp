<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/model/Database.php';

class EstudanteModel 
{
    private int $idade;

    private string $nome;

    private $database;


    // Getter and Setter

    public function __construct()
    {
        $this->database = new Database();
    }
    public function listarModel(): array
    {
        //$array = array(1, 2, 3, 4, 5);
        //$array = array[João, Maria, José];

        $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");

        return $dadosArray;
    }
    public function salvarModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO estudantes(nomes, idade)values ('$nome', '$idade')";
        $this->database->insert($sql);
        echo  "Estudante salvo om sucesso";
    }
}