<?php
require_once(__DIR__ . "/../database/Database.php");
require_once(__DIR__ . "/../models/Parameter.php");

class ParameterController
{
    private ?PDO $conn;

    public function __construct()
    {
        $this->conn = (new Database())->getConnection();
    }

    public function getLatestParameter(): ?Parameter
    {
        $stm = $this->conn->prepare("select * from parameters where timestamp = (select max(timestamp) from parameters)");
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_CLASS, "Parameter");
        $result = $stm->fetch();
        if (!$result) {
            return null;
        } else {
            return $result;
        }

    }
}