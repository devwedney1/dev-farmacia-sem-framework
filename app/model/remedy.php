<?php

class remedy
{
    private $db;
    private const tableName = 'remedio';
    protected string $remedios;

    public function __construct(PDO $db, string $remedios ) {
        $this->db = $db;
        $this->remedios = $remedios;
    }

    public function createRemedy($nameMedicamento, $namelaboratorio, $precoUnitario, $tipoReceita, $tipoMedicamento, $descricaoRemedio)
    {
        try {

            $query = "INSERT INTO " . self::tableName . " (nomeDoRemedio, nomeLaboratorio, valorDoRemedio, id_tipoRemedio, tipoMedicamento, descricao) VALUES (:nomeDoRemedio, :nomeLaboratorio, :valorDoRemedio, :id_tipoRemedio, :tipoMedicamento, :descricao) ";
    
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nomeDoRemedio', $idCliente, PDO::PARAM_STR);
            $stmt->bindParam(':nomeLaboratorio', $idCliente, PDO::PARAM_STR);
            $stmt->bindParam(':valorDoRemedio', $idCliente, PDO::PARAM_INT);
            $stmt->bindParam(':id_tipoRemedio', $idCliente, PDO::PARAM_INT);
            $stmt->bindParam(':tipoMedicamento', $idCliente, PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $idCliente, PDO::PARAM_STR);
            $stmt->execute();
    
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Erro ao buscar cliente" . $e->getMessage());
        }

    }

    public function showRemedy()
    {

    }

    public function updateRemedy()
    {

    }

    public function deleteRemedy()
    {
        
    }

}