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
                            <div class="form-group mb-2 row">
                                <label for="parameter" class="col-sm-2 col-form-label">Parameter <span
                                            style="font-style: oblique">a</span></label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="parameter" value="1" step="0.001">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary mb-2" id="parameter-btn">
                                Nastaviť parameter
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h2>Stream 1</h2>
                            <pre id="stream-3">

                        </pre>
                        </div>
                        <div class="col">
                            <h2>Stream 2</h2>
                            <pre id="stream-2">

                        </pre>
                        </div>
                        <div class="col">
                            <h2>Stream 3</h2>
                            <pre id="stream-1">

                        </pre>
                        </div>
                    </div>
                </div>
                <!-- TODO: MAIN CONTENT -->

            </main>
        </div>
    </div>
</div>

<?php include(__DIR__ . "/partials/footer.php"); ?>
</body>