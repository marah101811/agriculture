<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	
</head>
<body>

<?php
   require 'db_connection.php';
   $id = 0;
   if ( !empty($_GET['id'])) {
       $id = $_REQUEST['id'];
   }
    
    if ( null==$id ) {
       header("Location: user_list.php");
   }  
   if(!empty($_POST)) {
   $id=$_POST['id'];

       $pdo = Database::connect();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "DELETE FROM user_list where id = ?";
 $q = $pdo->prepare($sql);
       $q->execute(array($id));
 Database::disconnect();
 header("Location: user_list.php");
  
}   
$id = null;
   if ( !empty($_GET['id'])) {
       $id = $_REQUEST['id'];
   }
    
   if ( null==$id ) {
       header("Location: index.php");
   } else {
       $pdo = Database::connect();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT * FROM user_list where id = ?";
 $q = $pdo->prepare($sql);
       $q->execute(array($id));
       $data = $q->fetch(PDO::FETCH_ASSOC);
       Database::disconnect();
   }
?>


<div class="container" style="background-color: limegreen; width: 60%; margin-top: 5%;">

       <div class="container" style="background-color: seagreen; width: 80%; margin-top: 5%;"><p style="font-size: 20px; color: black; text-align: center;">DELETE</p>
    <br>
<form action="delete.php" method="post">

<label>Last Name</label>
<input type="text" value="<?php echo strtoupper($data['last_name']);?>">
<br><br>
  <label>First Name</label>
<input type="text" value="<?php echo $data['first_name'];?>"> 
<br><br>
  <label>Middle Name</label>
<input type="text" value="<?php echo $data['middle_name'];?>">
<br><br>
  <label>Extension Name</label>
<input type="text" value="<?php echo $data['extension_name'];?>">
<br><br>
  <label>Gender</label>
<input type="text" value="<?php echo $data['gender'];?>">
<br><br>
  <label>House Street</label>
<input type="text" value="<?php echo $data['house_no'];?>">
<br><br>
  <label>Farmer Address1</label>
<input type="text" value="<?php echo $data['farmer_address1'];?>">
<br><br>
  <label>Farmer Address2</label>
<input type="text" value="<?php echo $data['farmer_address2'];?>">
<br><br>
  <label>Farmer Address3</label>
<input type="text" value="<?php echo $data['farmer_address3'];?>">
<br><br>
  <label>Parcel Number</label>
<input type="text" value="<?php echo $data['parcel_no'];?>">
<br><br>
  <label>Parcel Address1</label>
<input type="text" value="<?php echo $data['parcel_address1'];?>">
<br><br>
  <label>Parcel Address2</label>
<input type="text" value="<?php echo $data['parcel_address2'];?>">
<br><br>
<label>Parcel Address3</label>
<input type="text" value="<?php echo $data['parcel_address3'];?>">
<br><br>
<label>Crop Area</label>
<input type="text" value="<?php echo $data['crop_area'];?>">
<br><br>
<label>Parcel Area</label>
<input type="text" value="<?php echo $data['parcel_area'];?>">
<br><br>
<label>Crop Name</label>
<input type="text" value="<?php echo $data['cropname'];?>">
<br><br>
 
      
</form>

<div class="col-10-offset-1">
<form action="delete.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<p class="alert alert-warning text-center">Are you sure you want to delete?</p>
<div class="form-actions">
  <center><button type="submit" class="btn btn-danger" title="Delete">YES</button>
<a href="user_list.php" class="btn btn-dark" title="back">Cancel</a>
  </center>
</div>
  </div>
</form>
</div>
</body>
</html>


  