<?php 
namespace MODEL;
class Produto {
    private ?int $id;
    private ?string $nome;
    private ?float $preco;
    private ?string $descricao;
    private ?int $estoque;
    private Categoria $categoria;

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
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco(float $preco) {
        return $this->preco = $preco;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao(string $descricao) {
        return $this->descricao = $descricao;
    }



    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque(int $estoque) {
        return $this->estoque = $estoque;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria(Categoria $categoria) {
        return $this->categoria = $categoria;
    }
}

?>