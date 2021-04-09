<?php
require_once(__DIR__ . "/../classes/controllers/ParameterController.php");
require_once(__DIR__ . "/../classes/models/Parameter.php");

require_once(__DIR__ . "/../classes/controllers/StreamController.php");
require_once(__DIR__ . "/../classes/models/Stream.php");

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header("Connection: keep-alive");


$parametersControllers = new ParameterController();
$streamControllers = new StreamController();

$x = 0;

while (true) {
    $parameters = $parametersControllers->getLatestParameter();
    $a = $parameters->getParameter();

    if (!is_null($a)) {
        $data = array(
            'x' => $x,
            'a' => $a,
        );

        $stream = $streamControllers->getLatestStream();

        if (!is_null($stream)) {
            if ($stream->isY1()) {
                $y1 = sin($a * $x) * sin($a * $x);
                $data['y1'] = $y1;
            }
            if ($stream->isY2()) {
                $y2 = cos($a * $x) * cos($a * $x);
                $data['y2'] = $y2;
            }
            if ($stream->isY3()) {
                $y3 = sin($a * $x) * cos($a * $x);
                $data['y3'] = $y3;

            }

            $x += 0.05;

            echo 'data: ' . json_encode($data) . PHP_EOL . PHP_EOL;

        } else {
            echo 'error: streams error' . PHP_EOL . PHP_EOL;
        }
    } else {
        echo 'error: parameter error' . PHP_EOL . PHP_EOL;
    }

    ob_flush();
    flush();

    sleep(2);
}
