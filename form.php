<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $surname = $_POST["surname"];
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $extension_name = $_POST["extension_name"];
    $sex = $_POST["sex"];
    $house_num = $_POST["house_num"];
    $street = $_POST["street"];
    $brgy = $_POST["brgy"];
    $municipal = $_POST["municipal"];
    $province = $_POST["province"];
    $region = $_POST["region"];
    $mobile_number = $_POST["mobile_number"];
    $landline_number = $_POST["landline_number"];
    $bday = $_POST["bday"];
    $place_of_birth = $_POST["place_of_birth"];
    $municipality_born = $_POST["municipality_born"];
    $province_born = $_POST["province_born"];
    $country_born = $_POST["country_born"];
    $education = $_POST["education"];
    $religion = isset($_POST["religion"]) ? implode(", ", $_POST["religion"]) : "";
    $other_religion = isset($_POST["other_religion"]) ? $_POST["other_religion"] : "";
    $civil_status = isset($_POST["civil_status"]) ? implode(", ", $_POST["civil_status"]) : "";
    $spouse_name = isset($_POST["spouse_name"]) ? $_POST["spouse_name"] : "";
    $pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : "";

    // Output the form data
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p><b>Personal Information:</b></p>";
    echo "<p>Surname: $surname</p>";
    echo "<p>Firstname: $firstname</p>";
    echo "<p>Middlename: $middlename</p>";
    echo "<p>Extension name: $extension_name</p>";
    echo "<p>Sex: $sex</p>";
    echo "<p><b>Address:</b></p>";
    echo "<p>House no./Bldg. no/Purok: $house_num</p>";
    echo "<p>Street/Sitio/SUBDV.: $street</p>";
    echo "<p>Barangay: $brgy</p>";
    echo "<p>Municipality: $municipal</p>";
    echo "<p>Province: $province</p>";
    echo "<p>Region: $region</p>";
    echo "<p><b>Contact Information:</b></p>";
    echo "<p>Mobile Number: $mobile_number</p>";
    echo "<p>Landline Number: $landline_number</p>";
    echo "<p>Date of Birth: $bday</p>";
    echo "<p>Place of Birth: $place_of_birth</p>";
    echo "<p>Municipality Born: $municipality_born</p>";
    echo "<p>Province Born: $province_born</p>";
    echo "<p>Country Born: $country_born</p>";
    echo "<p><b>Highest Formal Education:</b> $education</p>";
    echo "<p><b>Religion:</b> $religion";
    if ($religion == "Other" && !empty($other_religion)) {
        echo " - $other_religion";
    }
    echo "</p>";
    echo "<p><b>Civil Status:</b> $civil_status</p>";
    echo "<p><b>Name of Spouse if Married:</b> $spouse_name</p>";
    echo "<p><b>Person with Disability (PWD):</b> $pwd</p>";
}
?>
