<?php

include "dbh.php";

// Based on functionName, call the correct function
switch ($_POST['functionName']) {

    case "GetDeviceStates":
        GetDeviceStates();
        break;

    case "GetSensorValues":
        GetSensorValues();
        break;

    case "GetDeviceNames":
        GetDeviceNames();
        break;
         
}

/// Retrieve current device states
function GetDeviceStates(){
       
    $query = "SELECT device, state FROM smart_devices";

    $statement = ConnectToDatabase()->query($query);
    $devices = $statement->fetchAll();      

    echo json_encode($devices);    
}

/// Retrieve sensor values
function GetSensorValues(){

    $query = "SELECT DATE(time_of_read) AS date, AVG(temperature_value) AS avg_temperature, AVG(humidity_value) AS avg_humidity
    FROM sensors
    GROUP BY DATE(time_of_read)";

    $statement = ConnectToDatabase()->query($query);
    $values = $statement->fetchAll();      

    echo json_encode($values);    
}

/// Retrieve current device names
function GetDeviceNames(){
       
    $query = "SELECT device, state FROM smart_devices";

    $statement = ConnectToDatabase()->query($query);
    $devices = $statement->fetchAll();      

    echo json_encode($devices);    
}

?>