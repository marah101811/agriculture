<?php
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    // Include the database connection file
    include 'db_connection.php';
    $pdo = Database::connect();

    // Fetch user data from the database
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
</head>

<body>
    <header class="dashboard-header">
        <h1>Admin Dashboard</h1>
    </header>

    <div class="container">
        <div class="tag1">
            <center>
                <img src="sane_logo.png" class="logo" color="translucent" style="height: 150px; width: 150px; margin-top: 5px;"><br>
                <ion-title color="white">AN ONLINE APPLICATION FOR SAN ANTONIO RICEFIELD AGRICULTURE AND CUSTOMER SERVICE</ion-title>   
            </center>
            <br>
            <br>
                <button onclick="goBack()">Go Back</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
            <a href="approved.php"><div class="button button1">Approved Application</div></a>
            <div class="button button2">Pending Application</div>
        </div>
    </div>

    <div>
        <h2>User List</h2>

        <!-- Display the user data in a table -->
        <table style="width:50%; float: right;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <!-- Add more columns if needed -->
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <!-- Add more columns if needed -->
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <nav class="dashboard-nav">
        <ul>
            <a href="#"><i class="fas fa-home">&nbsp;&nbsp;</i>Dashboard</a>
            <br>
            <label class="tag2">Main</label>
            <br>
            <br>
            <a href="#"><i class="fas fa-users">&nbsp;&nbsp;</i>User Management</a> 
            <a href="#"><i class="fas fa-credit-card">&nbsp;&nbsp;</i> Application Management</a>
            <br>
            <label class="tag2">Maintenance</label>
            <br>
            <br>
            <a href="#"><i class="fas fa-users">&nbsp;&nbsp;</i>Weather Forecast</a>
            <a href="#"><i class="fas fa-cog">&nbsp;&nbsp;</i>Settings</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;</i>Logout</a>

            <!-- Add more menu items as needed -->
        </ul>
    </nav>
</body>
</html>

<?php
} else {
    header("Location: index.php");
}
?>
