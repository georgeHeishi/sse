<?php
require_once(__DIR__ . "/../classes/controllers/ParameterController.php");
require_once(__DIR__ . "/../classes/models/Parameter.php");

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header("Connection: keep-alive");


$parametersControllers = new ParameterController();

$x = 0;

while (true) {
    $parameters = $parametersControllers->getLatestParameter();
    $a = $parameters->getParameter();

    $y1 = sin($a * $x) * sin($a * $x);
    $y2 = cos($a * $x) * cos($a * $x);
    $y3 = sin($a * $x) * cos($a * $x);

    $data = array(
        'x' => $x,
        'a' => $a,
        'y1' => $y1,
        'y2' => $y2,
        'y3' => $y3
    );

    $x += 0.05;

    echo 'data: ' . json_encode($data) . PHP_EOL . PHP_EOL;


    ob_flush();
    flush();

    sleep(2);
}
