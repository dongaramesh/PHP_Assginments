<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $typeOfRequest = $_POST["type_of_request"];
    $industryCategory = $_POST["industry_category"];
    $industryCode = $_POST["industry_code"];
    $fullName = $_POST["full_name"];
    $address = $_POST["address"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $city = $_POST["city"];
    $district = $_POST["district"];
    $state = $_POST["state"];
    $isInGangaBasin = $_POST["is_in_ganga_basin"];
    $authorizedRepresentativeEmail = $_POST["authorized_representative_email"];

   
    $spcbPccEmail = $_POST["spcb_pcc_email"];

    // Station Details
    $typeOfDischarge = $_POST["type_of_discharge"];
    $industrialProcess = $_POST["industrial_process"];
    $stationName = $_POST["station_name"];
    $fuelUsed = $_POST["fuel_used"];
    $dateOfCommissioning = $_POST["date_of_commissioning"];

    echo "Type of Request: $typeOfRequest<br>";
    echo "Industry Category: $industryCategory<br>";
    echo "Industry Code: $industryCode<br>";
    echo "Full Name: $fullName<br>";
    echo "Address: $address<br>";
    echo "Latitude: $latitude<br>";
    echo "Longitude: $longitude<br>";
    echo "City/Town: $city<br>";
    echo "District: $district<br>";
    echo "State: $state<br>";
    echo "Is in Ganga Basin: $isInGangaBasin<br>";
    echo "Authorized Representative Email: $authorizedRepresentativeEmail<br>";

    echo "SPCB/PCC Regional Office Email: $spcbPccEmail<br>";

    // Station Details
    echo "Type of Discharge: $typeOfDischarge<br>";
    echo "Industrial Process: $industrialProcess<br>";
    echo "Station Name: $stationName<br>";
    echo "Fuel Used: $fuelUsed<br>";
    echo "Date of Commissioning: $dateOfCommissioning<br>";

    
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  

    Type of Discharge: <input type="text" name="type_of_discharge"><br>
    Industrial Process: <input type="text" name="industrial_process"><br>
    Station Name: <input type="text" name="station_name"><br>
    Fuel Used: <input type="text" name="fuel_used"><br>
    Date of Commissioning: <input type="date" name="date_of_commissioning"><br>

    <input type="submit" value="Submit">
</form>
