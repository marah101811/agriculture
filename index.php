
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BSIT 3A</title>
  <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css"/>
  <link rel="stylesheet" href="">
  <style>
    body {
      background-image: url("ricefield.jpeg");
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    ion-title {
      color: green;
      font-size: 24px;
      font-weight: bold;
      font-style: italic;
      backdrop-filter: blur(40px);
      background-color: rgba(255, 255, 255, 0.7); /* Adjust the opacity here */
      padding: 20px;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding: 0 20px;
    }

    .content {
      width: 100%;
      max-width: 400px; /* Adjust max-width as needed */
      font-size: 24px;
      font-weight: bold;
      backdrop-filter: blur(50px);
      box-shadow: 0 0 40px rgba(207, 207, 207, 0.315);
      background-color: rgba(255, 255, 255, 0.336);
      padding: 20px;
    }

    .form-el {
      margin-top: 1.5em;
    }

    input {
      width: 100%;
      border: none;
      border-radius: 0.2em;
      padding: 0.5em;
      background-color: rgba(255, 255, 255, 0.185);
      backdrop-filter: blur(30px);
      margin-top: 0.6em;
    }

    label {
      color: rgb(8, 63, 1);
      font-weight: 600;
    }

    .submit {
      width: 50%;
      padding: 0.6em;
      background-color: darkgreen;
      color: #ffffff;
      font-weight: 400;
      font-size: 0.8em;
    }
    button{
            background-color: green;
            color: white;
            border: none;
            padding: 10px 10px; /* Adjust padding as needed */
            font-size: 10px; /* Set font size to 20px */
            cursor: pointer;
            
        }
  </style>
</head>
<body>
  <ion-app>
    <ion-tabs>
      <ion-tab tab="music">
        <ion-header>
          <ion-toolbar color="transluscent">
            <center>
              <img src="sane_logo.png" class="logo" color="translucent" style="height: 150px; width: 150px; margin-top: 5px;"><br>
              <ion-title>AN ONLINE LAND REGISTRATION FOR SAN ANTONIO RICEFIELD AGRICULTURE AND ANNOUNCEMENT</ion-title>
            </center>
          </ion-toolbar>
        </ion-header>

        <div class="container">
          <div class="content">
            <center>
              <div class="form-el">
                <form action="" method="POST">
                  <label class="title">Login</label><br><br>
                  <label for="user_email">Email</label><br>
                  <input type="text" name="user_email" id="user_email" placeholder="Enter your email address" required><br><br>
                  <label for="user_password">Password</label><br>
                  <input type="password" name="user_password" id="user_password" placeholder="Enter your password" required><br><br>
                  <input class="submit" type="submit" value="Login" name="user_log"><br>
                  <?php 
                    if(isset($_GET['error'])){
                      echo $_GET['error'];
                    }
                  ?>
                  <button onclick="window.location.href = 'home.php';">home</button>
                </form>
              </div>
            </center>
          </div>
      </ion-tab>
    </ion-tabs>
  </ion-app>
</body>
</html>
