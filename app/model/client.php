<?php

class client extends people {
    private $db;
    private const tableName = 'client';
    private int $codigoCliente;

    public function __construct(PDO $db, string $nome, string $cpf, int $codigoCliente) {
        parent::__construct($nome, $cpf);
        $this->codigoCliente = $codigoCliente;
        $this->db = $db;
    }

    public function createClient(int $idCliente) {

    }

    public function showClient(int $idCliente) {
        try {

            $query = "SELECT * FROM " . self::tableName . "where id = :id";
    
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $idCliente, PDO::PARAM_INT);
            $stmt->execute();
    
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erro ao buscar cliente" . $e->getMessage());
        }
    }

    public function updateClient(int $idCliente) {
        try {

            $query = "SELECT * FROM " . self::tableName . "where id = :id";
    
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $idCliente, PDO::PARAM_INT);
            $stmt->execute();
    
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erro ao buscar cliente" . $e->getMessage());
        }
    }

    public function deleteClient(int $idCliente) {

    }
}

