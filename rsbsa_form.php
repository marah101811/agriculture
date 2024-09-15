<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RSBSA Enrollment Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 215.9mm; /* Legal paper width */
            height: 355.6mm; /* Legal paper height */
            margin: 20mm; /* Margin */
            padding: 10mm;
            border: 1px solid #000;
        }
        h1 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
            display: inline-block;
            width: 150px; /* Adjust label width as needed */
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        select,
        input[type="date"] {
            width: calc(100% - 170px); /* Adjust input width based on label width */
            padding: 5px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        .submit-btn {
            text-align: center;
        }
    </style>
</head>
<body>
    <button onclick="window.location.href = 'user_dash.php';">BACK</button>
    <div class="container">
        <h1>ANI AT KITA RSBSA ENROLLMENT FORM</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label><b>Personal Information</b></label>
            <br><br>
            <div class="name-inputs">
                <label>Surname:</label><input type="text" name="surname" placeholder="Enter your surname">
            </div>
            <div class="name-inputs">
                <label>Firstname:</label><input type="text" name="firstname" placeholder="Enter your firstname">
            </div>
            <div class="name-inputs">
                <label>Middlename:</label><input type="text" name="middlename" placeholder="Enter your middlename">
            </div>
            <div class="name-inputs">
                <label>Extension name:</label><input type="text" name="extension_name" placeholder="Others">
            </div>
            <br><br>
            <label><b>Sex:</b></label>
            <select name="sex">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br><br>
            <label><b>Address:</b></label>
            <br><br>
            <label>House no./Bldg. no/Purok:</label><input type="text" name="house_num" placeholder="Enter your house number"><br>
            <label>Street/Sitio/SUBDV.:</label><input type="text" name="street" placeholder="Enter your street/sitio/subdivion"><br>
            <label>Barangay:</label><input type="text" name="brgy" placeholder="Enter your barangay"><br>
            <label>Municipality:</label><input type="text" name="municipal" placeholder="Enter your municipality"><br>
            <label>Province:</label><input type="text" name="province" placeholder="Enter your province"><br>
            <label>Region:</label><input type="text" name="region" placeholder="Enter your region"><br><br>
            <label><b>Contact Information</b></label>
            <br>
            <label>Mobile Number:</label><input type="number" name="mobile_number" placeholder="Enter your mobile number"><br>
            <label>Landline Number:</label><input type="number" name="landline_number" placeholder="Enter your landline number"><br><br>
            <label>Date of Birth:</label><input type="date" name="bday"><br>
            <label>Place of Birth:</label><input type="text" name="place_of_birth" placeholder="Enter your place of birth"><br>
            <label>Municipality:</label><input type="text" name="municipality_born" placeholder="Enter your municipality"><br>
            <label>Province:</label><input type="text" name="province_born" placeholder="Enter your province"><br>
            <label>Country:</label><input type="text" name="country_born" placeholder="Enter your country"><br><br>
            <label><b>Highest Formal Education</b></label>
            <select name="education">
                <option>Pre-School</option>
                <option>Elementary</option>
                <option>High School (non K-12)</option>
                <option>Junior High School (K-12)</option>
                <option>Senior High School (K-12)</option>
                <option>College</option>
                <option>Vocational</option>
                <option>Post-Graduate</option>
                <option>None</option>
            </select><br><br>
            <label><b>Religion</b></label>
            <input type="checkbox" name="religion[]" value="Christianity">Christianity
            <input type="checkbox" name="religion[]" value="Islam">Islam
            <input type="checkbox" name="religion[]" value="Other">Other's specify <input type="text" name="other_religion"><br><br>
            <label><b>Civil Status</b></label>
            <input type="checkbox" name="civil_status[]" value="Single">Single
            <input type="checkbox" name="civil_status[]" value="Married">Married
            <input type="checkbox" name="civil_status[]" value="Widowed">Widowed
            <input type="checkbox" name="civil_status[]" value="Separated">Separated<br><br>
            <label><b>Name of Spouse if Married</b></label><input type="text" name="spouse_name"><br><br>
            <label><b>PERSON WITH DISABILITY (PWD)</b></label>
            <input type="checkbox" name="pwd" value="Yes">Yes
            <input type="checkbox" name="pwd" value="No">No<br>
            <div class="submit-btn">

            <?php	// Pag nai-submit na ang confirmation form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm'])) {
    // Process the form submission (e.g., save data to database)
    // Ito ang final confirmation step
    // Maaari mong gawin ang mga susunod na hakbang pagkatapos nito
    echo "<h1>Success!</h1>";
    echo "<p>Your enrollment form has been submitted.</p>";
}

// Redirect back to form if user cancels
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cancel'])) {
    header("Location: your_form_page.php");
    exit;
}
?> 
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>

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
