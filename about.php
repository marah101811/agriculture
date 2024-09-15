<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Website</title>
    <link rel="stylesheet" href="style.css">
    <style>

        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-image: url('ricefield.jpeg');
  background-size: cover; /* This ensures that the background image covers the entire body */
  background-repeat: no-repeat; /* This prevents the background image from repeating */

}
        /* CSS for header */
        

        /* CSS for logos */
        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            margin: 0 10px;
            max-width: 100px;
            height: auto;
        }

        /* CSS for main content */
        .card {
            margin: 0 auto;
            max-width: 600px;
            padding: 20px;
        }

        /* CSS for links and text */
        .card-content {
            margin-bottom: 10px;
        }

        /* Ensure text within the card is responsive */
        .card-content p {
            word-wrap: break-word;
        }
        .white-background {
            background-color: rgba(255, 255, 255, 0.7); /* White color with 70% opacity */
            padding: 20px; /* Add some padding */
            border-radius: 10px; /* Add rounded corners */
        }
        button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px; /* Adjust padding as needed */
            font-size: 20px; /* Set font size to 20px */
            cursor: pointer;
            
        }
        h1{
            font-size: 250%;
            color: darkgreen;
            text-align: center; /* Center the text horizontally */
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);

}
    </style>
</head>
<body>
<header>

    <div>
      <img src="da_logo.png" style="margin-top:0; margin-left: 5px; size:100px; height: 100px; width: 100px; float: left;">
      <img src="sane_logo.png" style="margin-top:0; margin-left: 10px; size:100px; height: 100px; width: 100px; float: left;">
  <p style="margin-top: 30px; margin-left: 50px; font-size: 25px; font-family: Arial;"><b>AN ONLINE LAND REGISTRATION FOR SAN ANTONIO RICEFIELD AGRICULTURE AND ANNOUNCEMENT</b></p>  
    </div>
  </toolbar>
</header>
<button onclick="window.location.href = 'home.php';">BACK</button>
<center>
<main>
<div class="card">
    <div class="card-content">
        <h1>MISSION and VISION</h1>
    </div>

    <div class="white-background">
        <p><b>VISION</b><br>
            "We envision San Antonio Nueva Ecija as a Highly Agro-Industrial Municipality in Central Luzon with God-loving healthy, law-abiding, and empowered citizenry working together in preserving and protecting its sustainable, safe, and ecologically-balanced environment gearing towards a progressive and dynamic economy guided by dedicated leaders known for their action and not merely words(GAWA HINDI SALITA)"</p>
        <p><b>MISSION</b><br>
            "Effective and strong people's participation complemented by a system of a planned coordination among all sectors and entities to safeguard the security of the community to develop and establish the local economy and to improve the standard of public service."</p>
    </div>
</div>
</main>
</center>
</div>
</body>
</html>
