<?php

require_once "DatabaseController.php";

class ProjectController {

    private $connection;

    public function __construct() {
        $this->connection = DatabaseController::connect();
    }

    public function getExperiencias() {
        try {
            $query = "SELECT * FROM Experiencia"; // Asegúrate de que el nombre de la tabla sea correcto
            $statement = $this->connection->prepare($query);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function getEstudios() {
        try {
            $sql = "SELECT * FROM Estudios";
            $statement = $this->connection->prepare($sql);
            $statement->setFetchMode(PDO::FETCH_OBJ);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function getTecnologias() {
        try {
            $sql = "SELECT * FROM Tecnologias";
            $statement = $this->connection->prepare($sql);
            $statement->setFetchMode(PDO::FETCH_OBJ);
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function getProyecto() {
    try {
        $sql = "SELECT * FROM Proyectos";
        $statement = $this->connection->prepare($sql);
        $statement->setFetchMode(PDO::FETCH_OBJ);
        $statement->execute();
        return $statement->fetch();
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

}
