function getDeviceStates() {
  $.ajax({
    type: "POST",
    url: "inc/functions.php",
    dataType: "json",
    data: {
      functionName: "GetDeviceStates",
    },

    complete: function (response) {
      showDeviceStates(response.responseJSON);
    },
  });
}

/// Show
function showDeviceStates(devices) {
  if (devices[0][1] === "0") {
    $("#label_led").text("Off").addClass("text-danger");
  } else {
    $("#label_led").text("On").addClass("text-success");
  }
  $("#label_rgb").text(devices[1][1]);

  $("#color").css("background-color", [`rgb(${devices[1][1]})`]);

  if (devices[2][1] === "Closed") {
    $("#label_motor").text(devices[2][1]).addClass("text-danger");
  } else {
    $("#label_motor").text(devices[2][1]).addClass("text-success");
  }
}

///
function getSensorValues() {
  $.ajax({
    type: "POST",
    url: "inc/functions.php",
    dataType: "json",
    data: {
      functionName: "GetSensorValues",
    },

    complete: function (response) {
      showSensorValues(response.responseJSON);
    },
  });
}

///
function showSensorValues(values) {
  values = roundNumbers(values);
  var template = $("#template_table_sensors").html();
  var renderTemplate = Mustache.render(template, values);
  $("#sensor_table tbody").append(renderTemplate);
}

///
function roundNumbers(values) {
  $.each(values, function (index, value) {
    value.avg_temperature = (Math.round(value.avg_temperature * 100) / 100).toFixed(2);
    value.avg_humidity = (Math.round(value.avg_humidity * 100) / 100).toFixed(2);
  });

  return values;
}

function getDeviceNames() {
  $.ajax({
    type: "POST",
    url: "inc/functions.php",
    dataType: "json",
    data: {
      functionName: "GetDeviceNames",
    },

    complete: function (response) {
      showDeviceNames(response.responseJSON);
    },
  });
}

/// Show
function showDeviceNames(deviceName) {
  $("#deviceNameTitle_led").text(deviceName[0][0]);
  $("#deviceName_led").text(deviceName[0][0]);
  $("#deviceNameTitle_rgb").text(deviceName[1][0]);
  $("#deviceName_rgb").text(deviceName[1][0]);
  $("#deviceNameTitle_motor").text(deviceName[2][0]);
  $("#deviceName_motor").text(deviceName[2][0]);
}
