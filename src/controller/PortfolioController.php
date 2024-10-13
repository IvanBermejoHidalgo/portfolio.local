<?php

require_once "ProjectController.php";

class PortfolioController {

    private $twig;
    private $projectController;

    public function __construct($twig) {
        $this->twig = $twig;
        $this->projectController = new ProjectController();
    }

    public function renderPortfolio() {
        // Obtener los datos desde ProjectController
        $experiencias = $this->projectController->getExperiencias();
        $estudios = $this->projectController->getEstudios();
        $tecnologias = $this->projectController->getTecnologias();
        $proyectos = $this->projectController->getProyecto();

        
        // Renderizar la plantilla Twig con los datos obtenidos
        echo $this->twig->render('index.html', [
            'experiencias' => $experiencias,
            'estudios' => $estudios,
            'tecnologias' => $tecnologias,
            'proyectos' => $proyectos
        ]);
    }
}
