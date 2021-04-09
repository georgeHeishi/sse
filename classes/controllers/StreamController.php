<?php


class StreamController
{
    private ?PDO $conn;

    public function __construct()
    {
        $this->conn = (new Database())->getConnection();
    }

    public function getLatestStream(): ?Stream
    {
        $stm = $this->conn->prepare("select * from streams where timestamp = (select max(timestamp) from streams)");
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_CLASS, "Stream");
        $result = $stm->fetch();
        if (!$result) {
            return null;
        } else {
            return $result;
        }
    }

    public function insertStream(Stream $stream): ?string
    {
        $stm = $this->conn->prepare("insert into streams (y1, y2, y3, timestamp)
                                            values (:y1, :y2, :y3, NOW())");

        if(isset($stream)){
            $y1 = $stream->isY1();
            $y2 = $stream->isY2();
            $y3 = $stream->isY3();
            $stm->bindParam(":y1", $y1, PDO::PARAM_BOOL);
            $stm->bindParam(":y2", $y2, PDO::PARAM_BOOL);
            $stm->bindParam(":y3", $y3, PDO::PARAM_BOOL);
            $stm->execute();
            return $this->conn->lastInsertId();
        }
        return null;
    }
}