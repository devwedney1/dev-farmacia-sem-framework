<?php


class farmaceuticos extends pessoa
{

    private int $codigoFarmaceuticos;

    function __construct(string $nome, string $cpf, int $codigoFarmaceuticos)
    {
        parent::__construct($nome, $cpf);
        $this->codigoFarmaceuticos = $codigoFarmaceuticos;
    }

    public function get_codigoFarmaceuticos()
    {
        return $this->codigoFarmaceuticos;
    }

    public function createFarmaceutico()
    {

    }

    public function showFarmaceutico()
    {

    }

    public function updateFarmaceutico()
    {

    }

    public function deleteFarmaceutico()
    {
        
    }

}