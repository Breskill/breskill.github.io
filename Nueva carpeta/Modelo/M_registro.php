<?php
class Usuario {
    private $id;
    private $username;
    private $correo;
    private $password;

    public function __construct($username, $correo, $password) {
        $this->username = $username;
        $this->correo = $correo;
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->correo;
    }

    public function setEmail($correo) {
        $this->correo = $correo;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}
?>
