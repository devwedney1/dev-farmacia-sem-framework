<?php

class RemedyController
{
    public function cadastraRemedy()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nameMedicamento = $_POST['nameMedicamento'];
            $namelaboratorio = $_POST['namelaboratorio'];
            $precoUnitario = $_POST['precoUnitario'];
            $tipoReceita = $_POST['tipoReceita'];
            $tipoMedicamento = $_POST['tipoMedicamento'];
            $descricaoRemedio = $_POST['descricaoRemedio'];

            var_dump($nameMedicamento );

            echo "Medicamento: $nameMedicamento<br>";
            echo "Laboratório: $namelaboratorio<br>";
            echo "Preço Unitário: $precoUnitario<br>";
            echo "Tipo de Receita: $tipoReceita<br>";
            echo "Tipo de Medicamento: $tipoMedicamento<br>";
            echo "Descrição: $descricaoRemedio<br>";



        }
    }

    public function listarRemedy()
    {
        // Lógica para exibir informações de um farmacêutico
    }

    public function atulizarRemedy()
    {
        // Lógica para atualizar dados de um farmacêutico
    }

    public function excluiRemedy()
    {
        // Lógica para excluir um farmacêutico
    }
}