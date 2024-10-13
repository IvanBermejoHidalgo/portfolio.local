<?php

require_once "../vendor/autoload.php";
require_once "../src/controller/PortfolioController.php";

// Preparar Twig
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true,
]);

// Instanciar el controlador de portafolio con Twig
$portfolioController = new PortfolioController($twig);

// Renderizar el portafolio usando el controlador
$portfolioController->renderPortfolio();

?>
