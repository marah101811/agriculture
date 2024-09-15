<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Application Form</title>
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

        
        .form-container input[type="checkbox"] {
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

        .checkbox-options {
            display: flex;
            align-items: center;
        }

        .checkbox-options label {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Application Form</h2>
        <form action="process_form.php" method="post">
            <label>Are you a new or updating.<br>Please check the box</label><br><br>

            <div class="checkbox-options">
                <input type="checkbox" id="new_or_new" name="new_or_new" value="new" href="new.php">
                <label for="new_or_new">New User</label>
                <input type="checkbox" id="update_update" name="update_or_update" value="update" href="update.php">
                <label for="update_update">Updating Information</label>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
