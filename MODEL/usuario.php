<?php 

namespace MODEL;

class Usuario {
    private ?int $id;
    private ?string $usuario;
    private ?string $email;
    private ?string $senha;

    public function __construct() {

    }

    public function getId() {
        return $this->id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId(int $id) {
        return $this->id = $id;
    }

    public function setUsuario(string $usuario) {
        return $this->usuario = $usuario;
    }

    public function setEmail(string $email) {
        return $this->email = $email;
    }

    public function setSenha(string $senha) {
        return $this->senha = $senha;
    }
}