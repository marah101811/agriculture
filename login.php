<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "your_database_name";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Function to securely hash passwords
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Function to verify hashed password
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}

// User Registration
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = hashPassword($_POST['password']); // Hash password before storing

    try {
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        echo "User registered successfully.";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// User Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=:username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && verifyPassword($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header("Location: user_dashboard.php");
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Admin Login
if (isset($_POST['admin_login'])) {
    $username = $_POST['admin_username'];
    $password = $_POST['admin_password'];

    if ($username === "admin" && $password === "adminpassword") { // Example admin credentials
        $_SESSION['admin_username'] = $username;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "Invalid admin credentials.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>User Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login" name="login">
    </form>

    <h2>User Registration</h2>
    <form action="" method="post">
        <label for="reg_username">Username:</label>
        <input type="text" id="reg_username" name="username" required><br><br>

        <label for="reg_password">Password:</label>
        <input type="password" id="reg_password" name="password" required><br><br>

        <input type="submit" value="Register" name="register">
    </form>

    <h2>Admin Login</h2>
    <form action="" method="post">
        <label for="admin_username">Username:</label>
        <input type="text" id="admin_username" name="admin_username" required><br><br>

        <label for="admin_password">Password:</label>
        <input type="password" id="admin_password" name="admin_password" required><br><br>

        <input type="submit" value="Login" name="admin_login">
    </form>
</body>
</html>
