<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 90%;
        }

        .form-container h2 {
            margin-top: 0;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-container input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 15px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
            box-sizing: border-box;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .admin-section {
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Application Form</h2>
        <form id="registration-form" action="process_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="checkbox" id="admin-checkbox" name="admin-checkbox">
            <label for="admin-checkbox">Create Account as Admin</label>

            <div class="admin-section">
                <h3>Admin Section</h3>
                <label for="admin-name">Admin Name:</label>
                <input type="text" id="admin-name" name="admin-name">

                <label for="admin-email">Admin Email:</label>
                <input type="email" id="admin-email" name="admin-email">

                <label for="admin-password">Admin Password:</label>
                <input type="password" id="admin-password" name="admin-password">
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>

    <script>
        document.getElementById('admin-checkbox').addEventListener('change', function() {
            var adminSection = document.querySelector('.admin-section');
            adminSection.style.display = this.checked ? 'block' : 'none';
        });
    </script>
</body>
</html>
