<?php

class RemedyController
{

    public function requestMetodo()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'];

            switch ($action) {
                case 'cadastraRemedy':
                    // Lógica para cadastrar o medicamento
                    break;
                case 'listarRemedy':
                    // Lógica para listar medicamentos
                    break;
                // ... outros casos para outros métodos ...
                default:
                    // Ação desconhecida
                    break;
            }
        }
    }

    public function cadastraRemedy()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nameMedicamento = $_POST['nameMedicamento'];
            $namelaboratorio = $_POST['namelaboratorio'];
            $precoUnitario = $_POST['precoUnitario'];
            $tipoReceita = $_POST['tipoReceita'];
            $tipoMedicamento = $_POST['tipoMedicamento'];
            $descricaoRemedio = $_POST['descricaoRemedio'];

            var_dump($nameMedicamento);

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