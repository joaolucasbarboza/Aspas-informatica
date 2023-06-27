<?php 

namespace MODEL;

class Fornecedor {
    private ?int $id;
    private ?string $razaoSocial;
    private ?string $cnpj;
    private ?string $email;

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

    public function getEmail() {
        return $this->email;
    }

    public function setId(int $id) {
        return $this->id = $id;
    }

    public function setRazaoSocial(string $razaoSocial) {
     return $this->razaoSocial = $razaoSocial;   
    }

    public function setCnpj(string $cnpj) {
        return $this->cnpj = $cnpj;
    }

    public function setEmail(string $email) {
        return $this->email = $email;
    }

}

?>