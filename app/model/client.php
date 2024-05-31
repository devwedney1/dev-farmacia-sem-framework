<?php

class ClienteModel {
    private $db;
    private const tableName = 'client';

    public function __construct(PDO $db) {
        $this->db = $db;
    }
    public function getClientePorId($idCliente) {
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
}