<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f5f5f5;
            width: 100%;
        }

        .header-left {
            display: flex;
            align-items: center;
        }

        .header-right {
            display: flex;
            align-items: center;
        }

        .header-left i {
            margin-right: 10px;
        }

        .header-right i {
            margin-right: 10px;
        }

        .header-title {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .content {
            padding: 20px;
            width: 100%;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            width: 20%;
            background-color: #f5f5f5;
            padding: 20px;
            border-right: 1px solid #ddd;
        }

        .main {
            width: 80%;
            padding: 20px;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .footer {
            background-color: #f5f5f5;
            padding: 10px;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <i class="fas fa-home"></i>
                <input type="text" value="kati.healthcert.ph" readonly>
            </div>
            <div class="header-right">
                <i class="fas fa-microphone"></i>
                <span>21</span>
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="content">
                
            <div class="main">
                <div class="section-title">My Account</div>
                <button class="button">Edit</button>
                <button class="button">Change Password</button>
                <div class="section-title">PERSONAL INFORMATION</div>
                
                <div class="form-group">
                    <label class="form-label">Last Name*</label>
                    <input type="text" class="form-input" placeholder="enter your surname">
                </div>
                <div class="form-group">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-input" placeholder="enter your firstname">
                </div>
                <div class="form-group">
                    <label class="form-label">Middle Name</label>
                    <input type="text" class="form-input" placeholder="enter your middlename">
                </div>
                <div class="form-group">
                    <label class="form-label">Nationality*</label>
                    <input type="text" class="form-input" placeholder=" ">
                </div>
                <div class="form-group">
                    <label class="form-label">Email Address*</label>
                    <input type="text" class="form-input" placeholder="enter your email">
                </div>
                <div class="form-group">
                    <label class="form-label">Mobile Number*</label>
                    <input type="text" class="form-input" placeholder=" ">
                </div>
                <div class="form-group">
                    <label class="form-label">Vocational</label>
                    <input type="text" class="form-input" placeholder=" ">
                </div>
                <div class="form-group">
                    <label class="form-label">Educational Attainment*</label>
                    <input type="text" class="form-input" placeholder=" ">
                </div>
                <div class="form-group">
                    <label class="form-label">Province*</label>
                    <input type="text" class="form-input" placeholder=" ">
                </div>
                <div class="form-group">
                    <label class="form-label">City*</label>
                    <input type="text" class="form-input" placeholder=" ">
                </div>
                <div class="form-group">
                    <label class="form-label">Barangay*</label>
                    <input type="text" class="form-input" placeholder=" ">
                </div>
                <div class="form-group">
                    <label class="form-label">Address*</label>
                    <input type="text" class="form-input" placeholder="">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Government Issued ID Type*</label>
                    <input type="file" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">Government Issued ID (max: 10 MB)*</label>
                    <input type="file" class="form-input">
                </div>
                <div class="form-group">
                    <label class="form-label">1x1 Photo (max: 10 MB)*</label>
                    <input type="file" class="form-input">
                    <p>1x1 photo upload requirement</p>
                </div>
                
                <div class="section-title">EMPLOYMENT INFORMATION</div>
                <button class="button">Registered</button>
                <button class="button">Pending</button>
</div>
</div>
</div>
</body>
</html>