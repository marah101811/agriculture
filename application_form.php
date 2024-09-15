<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <title>Application Form</title>
    <style>
       body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-image: url('ricefield.jpeg');
  background-size: cover; /* This ensures that the background image covers the entire body */
  background-repeat: no-repeat; /* This prevents the background image from repeating */

}
    </style>
</head>
<body>
    <button onclick="window.location.href = 'user_dash.php';">Back</button> 
    <div class="form-container" style="margin-top: 50px;">
        <div class="bg-white p-8">
  <div class="border-b-2 pb-4 mb-4">
    <h1 class="text-xl font-bold text-center">ANI AT KITA RSBSA ENROLLMENT FORM</h1>
    <p class="text-center text-sm">REGISTRY SYSTEM FOR BASIC SECTORS IN AGRICULTURE (RSBSA)</p>
  </div>
  <div class="grid grid-cols-3 gap-4 mb-4">
    <div>
      <label class="block mb-2">Enrollment Type & Date Administered:</label>
      <label class="inline-flex items-center mr-2">
        <input type="checkbox" class="form-checkbox" />
        <span class="ml-2">New</span>
      </label>
      <label class="inline-flex items-center">
        <input type="checkbox" class="form-checkbox" />
        <span class="ml-2">Updating</span>
      </label>
      <div class="flex mt-2">
        <input type="date" class="border p-1 w-8 text-center" />
      </div>
    </div>
    <div>
      <label class="block">Reference Number:</label>
      <input type="text" class="border p-1 w-full" />
    </div>
    <div class="text-center">
      <div class="border p-4">
        <p>2x2 PICTURE</p>
        <p class="text-xs mt-2">PHOTO TAKEN WITHIN 6 MONTHS</p>
      </div>
    </div>
  </div>
  <div class="border-t-2 pt-4">
    <h2 class="font-bold mb-4">PART 1: PERSONAL INFORMATION</h2>
    <div class="grid grid-cols-3 gap-4">
      <div>
        <label>Surname:</label>
        <input type="text" class="border p-1 w-full" />
      </div>
      <div>
        <label>Middle Name:</label>
        <input type="text" class="border p-1 w-full" />
      </div>
      <div>
        <label>First Name:</label>
        <input type="text" class="border p-1 w-full" />
      </div>
    </div>
    <div class="grid grid-cols-3 gap-4 mt-4">
      <div>
        <label>Extension Name:</label>
        <input type="text" class="border p-1 w-full" />
      </div>
      <div class="col-span-2">
        <label>Sex:</label>
        <label class="inline-flex items-center ml-4">
          <input type="checkbox" class="form-checkbox" />
          <span class="ml-2">Male</span>
        </label>
        <label class="inline-flex items-center ml-4">
          <input type="checkbox" class="form-checkbox" />
          <span class="ml-2">Female</span>
        </label>
      </div>
    </div>
    <div class="mt-4">
      <label>Address:</label>
      <input type="text" class="border p-1 w-full" />
    </div>
    <div class="grid grid-cols-4 gap-4 mt-4">
      <div>
        <label>House/Lot/Bldg. No./Purok:</label>
        <input type="text" class="border p-1 w-full" />
      </div>
      <div>
        <label>Street/Sitio/Subdv.:</label>
        <input type="text" class="border p-1 w-full" />
      </div>
      <div>
        <label>Municipality/City:</label>
        <input type="text" class="border p-1 w-full" />
      </div>
      <div>
        <label>Province:</label>
        <input type="text" class="border p-1 w-full" />
      </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mt-4">
      <div>
        <label>Region:</label>
        <input type="text" class="border p-1 w-full" />
      </div>
      <div>
        <label>Barangay:</label>
        <input type="text" class="border p-1 w-full" />
      </div>
    </div>
  </div>
</div>
        <div class="mt-4 text-center">
        <a href="application_form1.php"> <button class="button">next</button></a>
    </div>

    </div>
</body>
</html>
