 <?php
/*
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id']


*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
</head>
<style>
  
    </style>


<body>


<!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Admin</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-shopping-bag-alt' ></i>
                    <span class="text">My Profile</span>
                </a>
            </li>
            <li>
                <a href="user_list.php">
                    <i class='bx bxs-doughnut-chart' ></i>
                    <span class="text">User Management</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message-dots' ></i>
                    <span class="text">Message</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='' ></i>
                    <span class="text">Weather Forecast</span>
                </a>
            </li>
            
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>


<!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR --> 
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell' ></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/mara.jpg">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="home.php">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download' ></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-group' ></i>
                    <span class="text">
                        <h3>6586</h3>
                        <p>User List</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-calendar-check' ></i>
                    <span class="text">
                        <h3>300</h3>
                        <p>Pending Application</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle' ></i>
                    <span class="text">
                        <h3>200</h3>
                        <p>Approved Application</p>
                    </span>
                </li>
            </ul>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Applicants</h3>
                        <i class='bx bx-search' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Date Applied</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/mara.jpg">
                                    <p>Mary Jane C. Due</p>
                                </td>
                                <td>Papaya</td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/mara.jpg">
                                    <p>Mara B. Dela Cruz</p>
                                </td>
                                 <td>San Francisco</td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/mara.jpg">
                                    <p>Pennylou R. Ortiz</p>
                                </td>
                                 <td>Julo</td>
                                <td>01-10-2021</td>
                                <td><span class="status process">Processing</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/mara.jpg">
                                    <p>Lovely Precious Minguez</p>
                                </td>

                                 <td>San Francisco</td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/mara.jpg">
                                    <p>Edelyn C. Paderes</p>
                                </td>
                                 <td>Papaya</td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Approved</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
        </main>
        <!-- MAIN -->
    </section>
    <!-- Session -->
            <br>
            <button onclick="window.location.href = 'home.php';">HOME</button>
            <button onclick="goBack()">Go Back</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script> 
            
<!-- Session -->
    </div>
    


</body>
</html>


<?php
/*

}else{
    header("Location: index.php");
}
?>
*/