<?php
require_once(__DIR__ . "/../classes/controllers/ParameterController.php");
require_once(__DIR__ . "/../classes/models/Parameter.php");

require_once(__DIR__ . "/../classes/controllers/StreamController.php");
require_once(__DIR__ . "/../classes/models/Stream.php");

// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);

$success = false;

if (isset($data)) {
    $parameter = $data->parameter;
    $y1 = $data->y1;
    $y2 = $data->y2;
    $y3 = $data->y3;
    if (isset($parameter) && isset($y1) && isset($y2) && isset($y3)) {
        $parametersController = new ParameterController();
        $streamController = new StreamController();
        $return = $parametersController->insertParameter($parameter);

        if (!is_null($return)) {
            $success = true;
        }else{
            $success = false;
        }

        $stream = new Stream();
        $stream->setY1($y1);
        $stream->setY2($y2);
        $stream->setY3($y3);

        $return = $streamController->insertStream($stream);

        if (!is_null($return)) {
            $success = true;
        }else{
            $success = false;
        }

    }
}

echo json_encode(array("success" => $success));