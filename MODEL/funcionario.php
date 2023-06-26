<?php 

namespace MODEL;

class Funcionario {
    private ?int $id;
    private ?string $nome;
    private ?string $aniversario;
    private ?float $salario;

    public function __construct() {

    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getAniversario() {
        return $this->aniversario;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setId(int $id) {
        return $this->id = $id;
    }

    public function setNome(string $nome) {
        return $this->nome = $nome;
    }

    public function setAniversario(string $aniversario) {
        return $this->aniversario = $aniversario;
    }

    public function setSalario(float $salario) {
        return $this->salario = $salario;   
    }
}

?>