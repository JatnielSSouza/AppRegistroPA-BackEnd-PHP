<?php 

// Conexão com o banco de dados
class Conexao {
    private $host = 'localhost';
    private $dbname = 'registro_pa';
    private $user = 'root';
    private $pass = '';

    public function conectar() {
        try {
            //dsn configuration
            $conexao = New PDO ("mysql:host=$this->host;dbname=$this->dbname",
            "$this->user",
            "$this->pass"
        );

        return $conexao;

        } catch (PDOException $e) {
            echo '<p>' .$e->getMessage(). '</p>';
        }
    }
}