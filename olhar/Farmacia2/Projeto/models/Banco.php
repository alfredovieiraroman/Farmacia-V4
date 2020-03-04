<?php
// Classe conexão com o banco de dados.
class Banco {
    // Atributos de conexão.
    private $host = 'localhost';
    private $user = 'root';
    private $pw = '';
    private $db = 'farmacia';
    // Método da classe conexão.
    public function verBanco() {
        // Conexão.
        $conn = new mysqli($this->host, $this->user, $this->pw, $this->db);
            return $conn;
    }
}