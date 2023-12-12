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
    <title>Nova Space</title>
</head>

<body>
<?php 

GetNavBar();

    ?>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <img src="assets\Flag_of_the_Netherlands.svg.png" alt="Flag of the Netherlands" style="width: 35%; height: 65%;">
            </div>

            <div class="col d-flex justify-content-center">
                <img src="assets\Flag_of_Denmark.svg.png" alt="Flag of Denmark" style="width: 35%; height: 65%;">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <div class="card border-2 shadow border-secondary" style="width: 18.75rem;">
                    <img src="assets/WDany.png" class="card-img-top" alt="TemperatureImage">
                    <div class="card-body">
                        <h5 class="card-title">Dany</h5>
                        <p class="card-text">
                            One of two representatives of the Netherlands in this Project. Has worked on Arduino / hardware stuff,
                            backend and database.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card border-2 shadow border-secondary" style="width: 18.75rem;">
                    <img src="assets\Eugh.jpg" class="card-img-top" alt="TemperatureImage">
                    <div class="card-body">
                        <h5 class="card-title">Patrick</h5>
                        <p class="card-text">
                            One of two representatives of Denmark in this Project. Has worked on Frontend / website, and displaying
                            data.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <div class="card border-2 shadow border-secondary" style="width: 18.75rem; margin-bottom: 2%;">
                    <img src="assets/Bobster.png" class="card-img-top" alt="TemperatureImage">
                    <div class="card-body">
                        <h5 class="card-title">Bob</h5>
                        <p class="card-text">
                            One of two representatives of the Netherlands in this Project. Has worked on Arduino / hardware stuff,
                            backend and database.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col d-flex justify-content-center">
                <div class="card border-2 shadow border-secondary" style="width: 18.75rem; margin-bottom: 2%;">
                    <img src="assets/Oooo.jpg" class="card-img-top" alt="TemperatureImage">
                    <div class="card-body">
                        <h5 class="card-title">Phamishan</h5>
                        <p class="card-text">
                            One of two representatives of Denmark in this Project. Has worked on Frontend / website, and displaying
                            data.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>