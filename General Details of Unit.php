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

    // For simplicity, let's just display the submitted data for now
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

}
?>

<!-- HTML form to collect user input -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Type of Request: <input type="text" name="type_of_request"><br>
    Industry Category: <input type="text" name="industry_category"><br>

    <input type="submit" value="Submit">
</form>


