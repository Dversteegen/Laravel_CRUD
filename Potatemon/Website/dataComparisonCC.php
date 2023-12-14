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
    <title>Nova Space</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<script>
    window.onload = (event) => {

        getDeviceStates();
        getSensorValues();
        getSensorDanishValues();
    };
</script>

<body>
    <?php

    GetNavBar();

    ?>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <h1>Introduction</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <div class="roundedBox" style="margin-left: 5%; margin-right: 5%;">
                    <div class="text-wrap fw-bold" style="margin: 2%;">
                        On this page we will be displaying a comparison of data measured in the Netherlands and in
                        Denmark.
                        The data we have chosen to display as a comparison between the two countries are the measured
                        average
                        temperature every day, and the average humidity every day.
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <img src="assets\Flag_of_the_Netherlands.svg.png" alt="Flag of the Netherlands"
                    style="width: 35%; height: 65%;">
            </div>

            <div class="col d-flex justify-content-center">
                <img src="assets\Flag_of_Denmark.svg.png" alt="Flag of Denmark" style="width: 35%; height: 65%;">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <div class="card-title">

                    <table id="sensor_table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align:center;">Date</th>
                                <th style="text-align:center;">Temperature</th>
                                <th style="text-align:center;">Humidity</th>
                            </tr>
                        </thead>

                        <tbody id="sensor_tbody">

                        </tbody>

                    </table>

                    <!-- Template for crypto table -->
                    <template id="template_table_sensors">
                        {{#.}}
                        <tr>
                            <td style="text-align:center;">{{date}}</td>
                            <td style="text-align:center;">{{avg_temperature}}°</td>
                            <td style="text-align:center;">{{avg_humidity}}%</td>
                            {{/.}}
                    </template>
                </div>
            </div>


            <div class="col d-flex justify-content-center">
                <div class="card-title">
                    <table id="sensor_table_danish" class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align:center;">Date</th>
                                <th style="text-align:center;">Temperature</th>
                                <th style="text-align:center;">Humidity</th>
                            </tr>
                        </thead>

                        <tbody id="sensor_tbody">

                        </tbody>

                    </table>

                    <!-- Template for crypto table -->
                    <template id="template_table_danish_sensors">
                        {{#.}}
                        <tr>
                            <td style="text-align:center;">{{dateDanish}}</td>
                            <td style="text-align:center;">{{avg_temperatureDanish}}°</td>
                            <td style="text-align:center;">{{avg_humidityDanish}}%</td>
                            {{/.}}
                    </template>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col d-flex justify-content-center">

                </div>
            </div>
        </div>

        <script src="js/main.js"></script>
        <script src="js/jquery.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <!-- Mustache JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/4.1.0/mustache.min.js"
            integrity="sha512-HYiNpwSxYuji84SQbCU5m9kHEsRqwWypXgJMBtbRSumlx1iBB6QaxgEBZHSHEGM+fKyCX/3Kb5V5jeVXm0OglQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>