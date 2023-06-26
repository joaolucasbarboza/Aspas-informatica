<?php 

namespace MODEL; 

class Cliente {
    private ?int $id;
    private ?string $nome;
    private ?string $aniversario;
    private ?string $cpf;

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

    public function getCpf() {
        return $this->cpf;
    }

    public function setId(int $id) {
        return $this->id = $id;
    }

    public function setNome(int $nome) {
        return $this->nome = $nome;
    }

    public function setAniversario(string $aniversario) {
        return $this->aniversario = $aniversario;
    }

    public function setCpf(string $cpf) {
        return $this->cpf = $cpf;
    }

}

?>