<?php


$data = array(
    "Inputs" => array(
        "input1" => array(
            "ColumnNames" => $properties,
            "Values" => array($values)
        ),
    ),
    'GlobalParameters'=> null
);


$requestData = json_encode($data);


define("WEB_SERVICE_URL", "https://ussouthcentral.services.azureml.net/workspaces/fc06b739dbbf4af692d6cac387a507df/services/47603644e016408287eff8249ee8ce6d/execute?api-version=2.0&details=true");

define("API_KEY", "D+yugpAdCoZ5H76PJAZpH8cttEVXDSeHNqyQL4M2X8tfHDLVY1Z3atycUaaZAKJ7yFXz0Z/AGFHBKBbN1+WoYw==");

$requestHeader = array(
    "Authorization:Bearer " . API_KEY,
    "Content-Length:" . strlen($requestData),
    "Content-Type:application/json",
    "Accept: application/json");

$curl = curl_init(WEB_SERVICE_URL);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $requestData);
curl_setopt($curl, CURLOPT_HTTPHEADER, $requestHeader);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
$result = json_decode($result, true);

if (isset($result["Results"]["output1"]["value"]["Values"][0])) {
    $_SESSION["nextPER"] = $result["Results"]["output1"]["value"]["Values"][0][14];
    header("location:show_result.php");
    die();
}else {
    $_SESSION["error_type"] = "error";
    $_SESSION["error_msg"] = "Something went horribly wrong.";
    header("location:index.php");
}

?>