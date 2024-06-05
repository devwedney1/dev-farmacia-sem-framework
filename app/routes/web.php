<?php

// Obtém a URL da solicitação
$url = $_SERVER['REQUEST_URI'];

// Define as rotas e seus respectivos métodos
$rotas = [
    '/cadastro' => 'cadastraRemedy',
    '/listagem' => 'listarRemedy',
    // ... outras rotas ...
];

// Verifica se a rota existe
if (array_key_exists($url, $rotas)) {
    // Inclui o controlador
    require_once '../controllers/remedy/RemedyController.php';

    // Cria uma instância do controlador
    $controller = new RemedyController();

    // Chama o método apropriado
    $metodo = $rotas[$url];
    $controller->$metodo();
} else {
    // Rota não encontrada
    echo 'Página não encontrada';
}


