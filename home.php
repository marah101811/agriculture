<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-image: url('ricefield.jpeg');
  background-size: cover; /* This ensures that the background image covers the entire body */
  background-repeat: no-repeat; /* This prevents the background image from repeating */

}   
h1 {
            color: darkgreen;
            font-family: Arial;
            font-size: 300%;
            height: 200px;
            width: 100%;
            text-align: center; /* Center the text horizontally */
            display: flex;
            justify-content: center;
            align-items: center;
        }
h2{
            font-size: 250%;
            color: white;
            text-align: center; /* Center the text horizontally */
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);

}
button , container{
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px; /* Adjust padding as needed */
            font-size: 20px; /* Set font size to 20px */
            cursor: pointer;
            
        }
        .dashboard-header {
  color: green;
  font-size: 13px;
  padding: 10px;
  background-color: #f2f2f2;
}

.dashboard-nav {
  padding: 10px;
  background-color: green;
  width: 100%; /* Full width on smaller screens */
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  position: fixed;
  left: 0;
  top: 0;
  height: 100%; /* Full height on smaller screens */
  overflow-y: auto;
}

.dashboard-nav a {
  color: #fff;
  text-decoration: none;
  padding: 5px;
  display: block;
}

.dashboard-nav a:hover {
  background-color: #555;
}

.dashboard-content {
  padding: 10px;
  background-color: yellow;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-left: 0; /* Remove margin */
}

/* Responsive styles */
@media screen and (min-width: 768px) {
  .container {
    display: flex; /* Use flexbox for layout */
  }

  .tag1 {
    color: black;
    font-size: 15px;
    flex: 1; /* Take up remaining space */
    text-align: center; /* Center align text */
  }

  .dashboard-nav {
    width: 300px;
    height: auto; /* Auto height on larger screens */
    margin-top: 0; /* Remove margin */
  }

  .dashboard-content {
    margin-left: 320px;
  }
}
.logo-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.logo {
    max-width: 100%; /* Ensure the logo doesn't exceed its container's width */
    height: auto; /* Maintain aspect ratio */
}

.title {
    margin-top: 10px; /* Add some spacing between the logo and title */
    text-align: center;
}

@media screen and (max-width: 768px) {
    .logo-container {
        flex-direction: row; /* Align items horizontally on smaller screens */
        justify-content: center; /* Center items horizontally */
    }

    .logo {
        margin-right: 10px; /* Add some spacing between the logo and title */
    }

    .title {
        margin-top: 0; /* Remove margin on top */
        text-align: left; /* Align text to the left */
    }
}



</style>
<body>
<header>

    <div>
      <img src="da_logo.png" style="margin-top:0; margin-left: 5px; size:100px; height: 100px; width: 100px; float: left;">
      <img src="sane_logo.png" style="margin-top:0; margin-left: 10px; size:100px; height: 100px; width: 100px; float: left;">
  <p style="margin-top: 30px; margin-left: 50px; font-size: 25px; font-family: Arial;"><b>AN ONLINE LAND REGISTRATION FOR SAN ANTONIO RICEFIELD AGRICULTURE AND ANNOUNCEMENT</b></p>  
    </div>
  </toolbar>
</header>
<div class="container">
<button onclick="window.location.href = 'index.php';">Login</button>

  <div class="card">
    <div class="card-content"></div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a> 
        </li>
      </ul>
    </nav>
  </div>

  <div class="card">
    <div class="card-content"></div>
    <nav>
      <ul>
        <li><a href="about.php">About Us</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="card">
    <div class="card-content"></div>
    <nav>
      <ul>
        <li><a href="contact_us.php">Contact Us</a>
          <ul>
            <!-- Add more submenu items as needed -->
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<div>
  <center>
  <h1>WELCOME TO SAN ANTONIO AGRICULTURE</h1>
</center>
<a class="weatherwidget-io" href="https://forecast7.com/en/15d32120d83/san-antonio/" data-label_1="SAN ANTONIO" data-label_2="WEATHER" data-theme="kiwi" >SAN ANTONIO WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

<br><br>
<center>
<h2>ANNOUNCEMENT</h2>

    <button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>
    
</center>
</body>
</html>
