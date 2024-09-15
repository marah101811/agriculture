<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('ricefield.jpeg');
            background-size: cover; /* Ensures that the background image covers the entire body */
            background-repeat: no-repeat; /* Prevents the background image from repeating */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 20px;
        }

        .bg-white {
            background-color: white;
        }

        .dark\:bg-zinc-800 {
            background-color: #2d2d2d;
        }

        .p-8 {
            padding: 2rem;
        }

        .shadow-lg {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .w-full {
            width: 100%;
        }

        .md\:w-11\/12 {
            width: 91.666667%;
        }

        .lg\:w-10\/12 {
            width: 83.333333%;
        }

        .xl\:w-8\/12 {
            width: 66.666667%;
        }

        .border-b-2 {
            border-bottom-width: 2px;
        }

        .pb-4 {
            padding-bottom: 1rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .text-xl {
            font-size: 1.25rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .text-center {
            text-align: center;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .grid {
            display: grid;
            gap: 1rem;
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .md\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .gap-4 {
            gap: 1rem;
        }

        .border {
            border-width: 1px;
            border-color: #ccc;
        }

        .p-1 {
            padding: 0.25rem;
        }

        .w-8 {
            width: 2rem;
        }

        .w-16 {
            width: 4rem;
        }

        .w-full {
            width: 100%;
        }

        .flex {
            display: flex;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mr-2 {
            margin-right: 0.5rem;
        }

        .mx-1 {
            margin-left: 0.25rem;
            margin-right: 0.25rem;
        }

        .pt-4 {
            padding-top: 1rem;
        }

        .col-span-3 {
            grid-column: span 3 / span 3;
        }

        .md\:col-span-2 {
            grid-column: span 2 / span 2;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .inline-flex {
            display: inline-flex;
            align-items: center;
        }

        .items-center {
            align-items: center;
        }

        .form-checkbox {
            height: 1rem;
            width: 1rem;
            border-radius: 0.25rem;
            border-color: #ccc;
            transition: all 0.2s ease-in-out;
        }

        .form-checkbox:checked {
            background-color: #4caf50;
            border-color: #4caf50;
        }

        @media (max-width: 768px) {
            .md\:grid-cols-3 {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            .md\:col-span-2, .md\:col-span-3 {
                grid-column: span 1 / span 1;
            }

            .md\:w-11\/12, .lg\:w-10\/12, .xl\:w-8\/12 {
                width: 100%;
            }
        }

        /* Button Styles */
        .button {
            background-color: #4caf50; /* Green background */
            color: white; /* White text */
            padding: 15px 20px; /* Padding */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            font-size: 16px; /* Font size */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s, transform 0.3s; /* Smooth transitions */
            display: inline-block; /* Inline-block display */
            text-align: center; /* Centered text */
        }

        .button:hover {
            background-color: #45a049; /* Darker green on hover */
            transform: scale(1.05); /* Slightly larger on hover */
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .button {
                width: 100%; /* Full width on small screens */
                padding: 12px; /* Adjusted padding */
                font-size: 14px; /* Adjusted font size */
            }
        }
    </style>
</head>
<body>
    <div class="bg-white p-8 shadow-lg rounded-lg w-full md:w-11/12 lg:w-10/12 xl:w-8/12">
        <div class="border-b-2 pb-4 mb-4">
            <h1 class="text-xl font-bold text-center">ANI AT KITA RSBSA ENROLLMENT FORM</h1>
            <p class="text-center text-sm">REGISTRY SYSTEM FOR BASIC SECTORS IN AGRICULTURE (RSBSA)</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block mb-2">Enrollment Type & Date Administered:</label>
                <label class="inline-flex items-center mr-2">
                    <input type="checkbox" class="form-checkbox">
                    <span class="ml-2">New</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox">
                    <span class="ml-2">Updating</span>
                </label>
                <div class="flex mt-2">
                    <input type="text" placeholder="MM" class="border p-1 w-8 text-center">
                    <input type="text" placeholder="DD" class="border p-1 w-8 text-center mx-1">
                    <input type="text" placeholder="YYYY" class="border p-1 w-16 text-center">
                </div>
            </div>
            <div>
                <label class="block">Reference Number:</label>
                <input type="text" class="border p-1 w-full">
            </div>
            <div class="text-center">
                <div class="border p-4">
                    <p>2x2 PICTURE</p>
                    <p class="text-xs mt-2">PHOTO TAKEN WITHIN 6 MONTHS</p>
                </div>
            </div>
        </div>
        <div class="border-t-2 pt-4">
            <h2 class="font-bold mb-4 text-center">PART 1: PERSONAL INFORMATION</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label>Surname:</label>
                    <input type="text" class="border p-1 w-full">
                </div>
                <div>
                    <label>Middle Name:</label>
                    <input type="text" class="border p-1 w-full">
                </div>
                <div>
                    <label>First Name:</label>
                    <input type="text" class="border p-1 w-full">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <div>
                    <label>Extension Name:</label>
                    <input type="text" class="border p-1 w-full">
                </div>
                <div class="col-span-3 md:col-span-2">
                    <label>Sex:</label>
                    <label class="inline-flex items-center ml-4">
                        <input type="checkbox" class="form-checkbox">
                        <span class="ml-2">Male</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="checkbox" class="form-checkbox">
                        <span class="ml-2">Female</span>
                    </label>
                </div>
                <div class="mt-4">
      <label class="block mb-2 text-sm font-medium text-black dark:text-white">Address:</label>
      <input type="text" placeholder="Street" class="border p-2 w-full mb-2" />
      <input type="text" placeholder="City" class="border p-2 w-full mb-2" />
      <input type="text" placeholder="Province" class="border p-2 w-full mb-2" />
      <input type="text" placeholder="Postal Code" class="border p-2 w-full" />
    </div>
  </div>
  <div class="mb-4">
    <h2 class="font-bold mb-2 text-black dark:text-white">PART II: FARM PROFILE</h2>
    <div>
      <label class="block mb-2 text-sm font-medium text-black dark:text-white"
        >Main Livelihood:</label
      >
      <div class="flex items-center mb-2">
        <input type="checkbox" id="farmer" name="livelihood" value="farmer" />
        <label for="farmer" class="ml-2 text-black dark:text-white">Farmer</label>
      </div>
      <div class="flex items-center mb-2">
        <input type="checkbox" id="farmworker" name="livelihood" value="farmworker" />
        <label for="farmworker" class="ml-2 text-black dark:text-white">Farmworker/Laborer</label>
      </div>
      <div class="flex items-center mb-2">
        <input type="checkbox" id="fisherfolk" name="livelihood" value="fisherfolk" />
        <label for="fisherfolk" class="ml-2 text-black dark:text-white">Fisherfolk</label>
      </div>
      <div class="flex items-center mb-2">
        <input type="checkbox" id="agriyouth" name="livelihood" value="agriyouth" />
        <label for="agriyouth" class="ml-2 text-black dark:text-white">Agri Youth</label>
      </div>
    </div>
  </div>

  <div class="p-4 space-y-4">
  <div class="grid grid-cols-2 gap-4">
    <div>
      <label class="block mb-2">MOBILE NUMBER:</label>
      <div class="flex space-x-1">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
      </div>
    </div>
    <div>
      <label class="block mb-2">LANDLINE NUMBER:</label>
      <div class="flex space-x-1">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
        <input type="text" class="border p-2 w-5" placeholder="•">
      </div>
    </div>
  </div>
  <div class="grid grid-cols-2 gap-4">
    <div>
      <label class="block mb-2">DATE OF BIRTH:</label>
      <div class="flex space-x-1">
        <input type="text" class="border p-2 w-10" placeholder="M">
        <input type="text" class="border p-2 w-10" placeholder="M">
        <input type="text" class="border p-2 w-10" placeholder="D">
        <input type="text" class="border p-2 w-10" placeholder="D">
        <input type="text" class="border p-2 w-10" placeholder="Y">
        <input type="text" class="border p-2 w-10" placeholder="Y">
        <input type="text" class="border p-2 w-10" placeholder="Y">
        <input type="text" class="border p-2 w-10" placeholder="Y">
      </div>
    </div>
    <div>
      <label class="block mb-2">PLACE OF BIRTH:</label>
      <div class="flex flex-col space-y-1">
        <input type="text" class="border p-2 w-full" placeholder="Municipality">
        <div class="flex space-x-1">
          <input type="text" class="border p-2 w-1/2" placeholder="Province/State">
          <input type="text" class="border p-2 w-1/2" placeholder="Country">
        </div>
        <div class="text-center mt-8">
    <button class="bg-blue-500 text-white py-2 px-4 rounded">Submit</button>
  </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>
