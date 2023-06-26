<?php 

namespace MODEL;

class Fornecedor {
    private ?int $id;
    private ?string $razaoSocial;
    private ?string $cnpj;

    public function __construct() {

    }

    public function getId() {
        return $this->id;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

}

?>