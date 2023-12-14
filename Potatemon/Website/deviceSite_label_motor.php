<?php

include "inc/dbh.php";
include "inc/layout.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@2.0.1/css/halfmoon.min.css" rel="stylesheet"
        integrity="sha256-SsJizWSIG9JT9Qxbiy8xnYJfjCAkhEQ0hihxRn7jt2M=" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <title id="deviceNameTitle_motor">deviceName</title>
</head>

<script>
window.onload = (event) => {

    getDeviceNames();
    getDeviceStates();
};
</script>

<body>
    <?php 

    GetNavBar();

    ?>

    <div class="container-fluid">
        <div class="d-flex justify-content-center mt-3 fs-3" id="deviceName_motor">
            deviceName
        </div>

        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <div class="roundedBox p-3 border shadow border-secondary">
                    <div class="fs-4">
                        Status: <span id="label_motor">status</span> <br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col d-flex justify-content-center">
            <img src="assets/Motor.jpg" class="img-fluid rounded w-25 border shadow border-secondary" alt="Motor">
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>
    <!-- Mustache JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/4.1.0/mustache.min.js"
        integrity="sha512-HYiNpwSxYuji84SQbCU5m9kHEsRqwWypXgJMBtbRSumlx1iBB6QaxgEBZHSHEGM+fKyCX/3Kb5V5jeVXm0OglQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>