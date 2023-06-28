<?php 
namespace MODEL;
class Produto {
    private ?int $id;
    private ?string $nome;
    private ?string $preco;
    private ?string $descricao;
    private ?int $vendas;

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

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getVendas() {
        return $this->vendas;
    }

    public function setVendas(int $vendas) {
        return $this->vendas = $vendas;
    }
}

?>