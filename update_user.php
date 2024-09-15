<!DOCTYPE html>
<html>
<head>
    <title>UPDATE</title>
 
</head>
<body >

<?php 
require 'db_connection.php';

$id = null;
if (!empty($_GET['id'])) {
  $id = $_REQUEST['id'];
}

if (null == $id) {
  header("Location: user_list.php");
  exit; // Add exit to stop further execution after redirection
}
?>

  
  if (!empty($_POST)) {
    // keep track validation errors
		    $last_nameError = null;
        $first_nameError = null;
        $middle_nameError = null;
        $extension_name = null;
        $gender = null;
        $house_streetError = null;
        $farmer_address1Error = null;
        $farmer_address2Error = null;
        $farmer_address3Error = null;
        $parcel_noError = null;
        $parcel_address1Error = null;
        $parcel_address2Error = null;
        $parcel_address3Error = null;
        $crop_areaError = null;
        $parcel_areaError = null;
        $cropnameError = null;

    
          // keep track post values
          $last_name = $_POST['last_name'];
          $first_name = $_POST['first_name'];
          $middle_name = $_POST['middle_name'];
          $extension_name = $_POST['extension_name'];
          $gender = $_POST['gender'];
          $house_street = $_POST['house_street'];
          $farmer_address1 = $_POST['farmer_address1'];
          $farmer_address2 = $_POST['farmer_address2'];
          $farmer_address3 = $_POST['farmer_address3'];
          $parcel_no = $_POST['parcel_no'];
          $parcel_address1 = $_POST['parcel_address1'];
          $parcel_address2 = $_POST['parcel_address2'];
          $parcel_address3 = $_POST['parcel_address3'];
          $crop_area = $_POST['crop_area'];
          $parcel_area = $_POST['parcel_area'];
          $cropname = $_POST['cropname'];
      
    
    // validate input
        $valid = true;
        if (empty($last_name)) {
          $last_nameError = 'Please enter your lastname';
          $valid = false;
        }
        $valid = true;
        if (empty($first_name)) {
          $firsts_nameError = 'Please enter your firstname';
          $valid = false;
        }
        $valid = true;
        if (empty($middle_name)) {
          $middle_nameError = 'Please enter your middle name';
          $valid = false;
        }

        $valid = true;
        if (empty($extension_name)) {
          $extension_nameError = 'Please enter your extension name';
          $valid = false;
        }

        $valid = true;
        if (empty($gender)) {
          $genderError = 'Please enter your gender';
          $valid = false;
        }

        $valid = true;
        if (empty($house_street)) {
          $house_streetError = 'Please enter yoor street';
          $valid = false;
        }

        $valid = true;
        if (empty($farmer_address1)) {
          $farmer_address1Error = 'Please enter your barangay';
          $valid = false;
        }

        $valid = true;
        if (empty($farmer_address2)) {
          $farmer_address2Error = 'Please enter your municipality';
          $valid = false;
        }

        $valid = true;
        if (empty($farmer_address3)) {
          $farmer_address3Error = 'Please enter your province';
          $valid = false;
        }

        $valid = true;
        if (empty($parcel_no)) {
          $parcel_noError = 'Please enter parcel number';
          $valid = false;
        }

        $valid = true;
        if (empty($parcel_address1)) {
          $parcel_address1Error = 'Please enter parcel barangay';
          $valid = false;
        }

        $valid = true;
        if (empty($parcel_address2)) {
          $parcel_address2Error = 'Please enter parcel municipality';
          $valid = false;
        }

        $valid = true;
        if (empty($parccel_address3)) {
          $parcel_address3Error = 'Please enter parcel province';
          $valid = false;
        }

        $valid = true;
        if (empty($crop_area)) {
          $crop_areaError = 'Please enter crop area';
          $valid = false;
        }

        $valid = true;
        if (empty($parcel_area)) {
          $parcel_areaError = 'Please enter parcel_area';
          $valid = false;
        }

        $valid = true;
        if (empty($cropname)) {
          $cropnameError = 'Please enter your gender';
          $valid = false;
        }
           
    // update data
    if ($valid) {
      $pdo = Database::connect();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "UPDATE user_list  set  last_name = ?,  first_name = ?,  middle_name = ?,  extension_name = ?,  gender = ?, house_street = ?, farmer_address1 = ?, framer_address2 = ?, farmer_address3 = ?, parcel_no = ?, parcel_address1 = ?, parcel_address2 = ?, parcel_address3 = ?, crop_area = ?, parcel_area = ?, cropname = ?  WHERE id = ?";
      $q = $pdo->prepare($sql);
      $q->execute(array($last_name,$first_name,$middle_name,$extension_name,$gender,$house_street,$farmer_address1,$farmer_address2,$farmer_address3,$parcel_no,$parcel_address1,$parcel_address2,$parcel_address3,$crop_area,$parcel_area,$cropname));
      Database::disconnect();
      header("Location:user_list.php");
    }
  } else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM user_list where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $last_name = $data['last_name'];
    $first_name = $data['first_name'];
    $middle_name = $data['middle_name'];
    $extension_name = $data['extension_name'];
    $gender = $data['gender'];
    $house_street = $data['house_street'];
    $farmer_address1 = $data['farmer_address1'];
    $farmer_address2 = $data['farmer_address2'];
    $farmer_address3 = $data['farmer_address3'];
    $parcel_no = $data['parcel_no'];
    $parcel_address1 = $data['parcel_address1'];
    $parcel_address2 = $data['parcel_address2'];
    $parcel_address3 = $data['parcel_address3'];
    $crop_area = $data['crop_area'];
    $parcel_area = $data['parcel_area'];
    $cropname = $data['cropname'];
   
    
    
    Database::disconnect();
  }
?>
  <div class="container" style="background-color: limegreen; width: 60%; margin-top: 5%;">

       <div class="container" style="background-color: seagreen; width: 80%; margin-top: 5%;"><p style="font-size: 20px; color: black; text-align: center;">UPDATE</p>
	<br>
	
	

</div>
<div class="col-10 offset-1">

<form action="user_lis.php?id=<?php echo $id?>" method="post">
<div style="background-color: ligthgreen;">
<br>

<label>Last Name</label>

<input name="last_name" type="text"  placeholder="last_name" value="<?php echo !empty($last_name)?$last_name:'';?>">
  <?php if (!empty($last_nameError)): ?>
<span class="help-inline"><?php echo $last_nameError;?></span>
<?php endif; ?>

<br><br>

<label>First Name</label>

<input name="first_name" type="text"  placeholder="first_name" value="<?php echo !empty($first_name)?$first_name:'';?>">
<?php if (!empty($first_nameError)): ?>
<span class="help-inline"><?php echo $first_nameError;?></span>
<?php endif; ?>

<br><br>

<label>Middle Name</label>

<input name="middle_name" type="text"  placeholder="middle_name" value="<?php echo !empty($middle_name)?$middle_name:'';?>">
<?php if (!empty($middle_nameError)): ?>
<span class="help-inline"><?php echo $middle_nameError;?></span>
<?php endif; ?>

<br><br>

<label>Extension Name</label>

<input name="extension_name" type="text"  placeholder="extension_name" value="<?php echo !empty($extension_name)?$extension_name:'';?>">
<?php if (!empty($extension_nameError)): ?>
<span class="help-inline"><?php echo $extension_nameError;?></span>
<?php endif; ?>

<br><br>

<label>Gender</label>

<input name="gender" type="text"  placeholder="gender" value="<?php echo !empty($gender)?$gender:'';?>">
<?php if (!empty($genderError)): ?>
<span class="help-inline"><?php echo $genderError;?></span>
<?php endif; ?>

<br><br>

<label>House Street</label>

<input name="house_street" type="text"  placeholder="house_street" value="<?php echo !empty($house_street)?$house_street:'';?>">
<?php if (!empty($house_streetError)): ?>
<span class="help-inline"><?php echo $house_streetError;?></span>
<?php endif; ?>

<br><br>

<label>Farmer Address1</label>

<input name="farmer_address1" type="text"  placeholder="farmer_address1" value="<?php echo !empty($farmer_address1)?$farmer_address1:'';?>">
<?php if (!empty($farmer_address1Error)): ?>
<span class="help-inline"><?php echo $farmer_address1Error;?></span>
<?php endif; ?>

<br><br>

<label>Farmer Address2</label>

<input name="farmer_address2" type="text"  placeholder="farmer_address2" value="<?php echo !empty($farmer_address2)?$farmer_address2:'';?>">
<?php if (!empty($farmer_address2Error)): ?>
<span class="help-inline"><?php echo $farmer_address2Error;?></span>
<?php endif; ?>

<br><br>

<label>Farmer Address3</label>

<input name="farmer_address3" type="text"  placeholder="farmer_address3" value="<?php echo !empty($farmer_address3)?$farmer_address3:'';?>">
<?php if (!empty($farmer_address3Error)): ?>
<span class="help-inline"><?php echo $farmer_address3Error;?></span>
<?php endif; ?>

<br><br>

<label>Parcel Number</label>

<input name="pacel_no" type="text"  placeholder="parcel_no" value="<?php echo !empty($parcel_no)?$parcel_no:'';?>">
<?php if (!empty($parcel_noError)): ?>
<span class="help-inline"><?php echo $parcel_noError;?></span>
<?php endif; ?>

<br><br>

<label>Parcel address2</label>

<input name="parcel_address1" type="text"  placeholder="parcel_no" value="<?php echo !empty($parcel_address1)?$parcel_address1:'';?>">
<?php if (!empty($parcel_address1Error)): ?>
<span class="help-inline"><?php echo $parcel_address1Error;?></span>
<?php endif; ?>

<br><br>

<label>Parcel Address2</label>

<input name="parcel_address2" type="text"  placeholder="parcel_address2" value="<?php echo !empty($parcel_address2)?$parcel_address2:'';?>">
<?php if (!empty($parcel_address2Error)): ?>
<span class="help-inline"><?php echo $parcel_address2Error;?></span>
<?php endif; ?>

<br><br>

<label>Parcel Address3</label>

<input name="parcel_address3" type="text"  placeholder="parcel_address3" value="<?php echo !empty($parcel_address3)?$parcel_address3:'';?>">
<?php if (!empty($parcel_address3Error)): ?>
<span class="help-inline"><?php echo $parcel_address3Error;?></span>
<?php endif; ?>

<br><br>

<label>Crop Area</label>

<input name="crop_area" type="text"  placeholder="crop_area" value="<?php echo !empty($crop_area)?$crop_area:'';?>">
<?php if (!empty($crop_areaError)): ?>
<span class="help-inline"><?php echo $crop_areaError;?></span>
<?php endif; ?>

<br><br>

<label>Parcel Area</label>

<input name="parcel_area" type="text"  placeholder="parcel_area" value="<?php echo !empty($parcel_area)?$parcel_area:'';?>">
<?php if (!empty($parcel_areaError)): ?>
<span class="help-inline"><?php echo $parcel_areaError;?></span>
<?php endif; ?>

<br><br>

<label>Crop name</label>

<input name="cropname" type="text"  placeholder="cropname" value="<?php echo !empty($cropname)?$cropname:'';?>">
<?php if (!empty($cropnameError)): ?>
<span class="help-inline"><?php echo $cropnameError;?></span>
<?php endif; ?>

<br>
<div class="text-center">
<button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i>  Update</button>
<a class="btn btn-dark" href="user_list.php"><i class="fa fa-arrow-circle-left"></i> Back</a>

</div>
</div>
</div>
</div>
               
              
  



</body>
</html>