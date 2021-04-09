<html lang="sk">
<head>
    <title>sse</title>
    <meta charset="UTF-8">
    <meta name="author" content="Juraj Lapčák">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link href="/sse/assets/css/style.css" rel="stylesheet">
    <script src="/sse/assets/js/script.js"></script>
</head>
<body>
<div class="container-fluid">
    <?php include(__DIR__ . "/partials/header.php"); ?>

    <div class="row mt-5">
        <div class="col-lg ">
            <main class="site-content">
                <div class="container-fluid">
                    <div class="row">
                        <h3 id="message"></h3>
                    </div>
                    <div class="row mt-2 mb-2">
                        <div class="col">
                            <form id="parameter-uploader" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-2">
                                    <div class="form-switch form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="y1" value="y1" checked>
                                        <label class="form-check-label" for="y1">
                                            y1
                                        </label>
                                    </div>
                                    <div class="form-switch form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="y2" value="y2" checked>
                                        <label class="form-check-label" for="y2">
                                            y2
                                        </label>
                                    </div>
                                    <div class="form-switch form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="y3" value="y3" checked>
                                        <label class="form-check-label" for="y3">
                                            y3
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mb-2 row align-items-center">
                                    <div class="col-auto">
                                        <input type="number" class="form-control" id="parameter" value="1" step="0.001">
                                    </div>
                                    <div class="col-auto">
                                        <label for="parameter" class="col-sm-2 col-form-label">Parameter</label>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mb-2" id="parameter-btn">
                                    Potvrdiť
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h2>Stream 1</h2>
                            <ul id="stream">

                            </ul>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<?php include(__DIR__ . "/partials/footer.php"); ?>
</body>