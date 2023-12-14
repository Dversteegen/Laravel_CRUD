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
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="css/style.css" rel="stylesheet">
    <title>Nova Space</title>
</head>

<script>
window.onload = (event) => {

    getDeviceNames();
    getDeviceStates();
    getSensorValues();
};
</script>

<body>
    <?php

    GetNavBar();

    ?>

    <div class="container-fluid">
        <div class="row mt-3">

            <div class="col d-flex justify-content-center">
                <div class="card border-2 shadow border-secondary" style="width: 18.75rem;">
                    <img src="assets/WhiteLed.jpg" class="card-img-top" alt="WhiteLed">
                    <div class="card-body">
                        <h5 class="card-title" id="deviceName_led">Card title</h5>

                        <p class="card-text">
                            Arduino White LED
                        </p>
                        <br>

                        <a href="deviceSite_label_led.php" class="btn btn-primary position-absolute bottom-0 start-0 m-3">Device Info</a>
                    </div>
                </div>
            </div>
            
            <div class="col d-flex justify-content-center">
                <div class="card border-2 shadow border-secondary" style="width: 18.75rem;">
                    <img src="assets/RGBModule.jpg" class="card-img-top" alt="RGBModule">
                    <div class="card-body">
                        <h5 class="card-title" id="deviceName_rgb">Card title</h5>

                        <p class="card-text">
                            Arduino RGB Module
                        <p>
                        <br>

                        <a href="deviceSite_label_rgb.php" class="btn btn-primary position-absolute bottom-0 start-0 m-3">Device Info</a>
                    </div>
                </div>       
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card border-2 shadow border-secondary" style="width: 18.75rem;">
                    <img src="assets/Motor.jpg" class="card-img-top" alt="Motor">
                    <div class="card-body">
                        <h5 class="card-title" id="deviceName_motor">Card title</h5>

                        <p class="card-text">
                            Arduino Motor
                        <p>
                        <br>

                        <a href="deviceSite_label_motor.php" class="btn btn-primary position-absolute bottom-0 start-0 m-3">Device Info</a>   
                    </div>
                </div>
            </div>
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