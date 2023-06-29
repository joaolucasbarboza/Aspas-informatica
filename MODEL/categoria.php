<?php 

namespace MODEL;
class Categoria {
    private ?int $id;
    private ?string $nome;
    private ?int $quantidade;

    public function __construct() {

    }

    public function getId() {
        return $this->id;
    }

    public function setId(int $id) {
        return $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome(string $nome) {
        return $this->nome = $nome;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade) {
        return $this->quantidade = $quantidade;
    }
}
?>