<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 
	require 'db_connection.php';

	if (!empty($_POST)) {
		
		$last_nameError = null;
		$first_nameError = null;
		$middle_nameError = null;
		$extension_nameError = null;
		$genderError = null;
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
		$crop_nameError = null;


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
		if ($valid){
					$pdo = Database::connect();
					$pdo->setAttribute(PDO::ATTR_ERRMODE,
						PDO::ERRMODE_EXCEPTION);
					$sql = 'INSERT INTO user_list (last_name,first_name,middle_name,extension_name,gender,house_street,farmer_address1,farmer_address2,farmer_address3,parcel_no,parcel_address1,parcel_address2,parceladdress3,crop_area,parcel_area,cropname) values
					(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
					$q = $pdo->prepare($sql);
					$q->execute(array($last_name,$first_name,$middle_name,$extension_name,$gender,$house_street,$farmer_address1,$farmer_address2,$farmer_address3,$parcel_no,$parcel_address1,$parcel_address2,$parceladdress3,$crop_area,$parcel_area,$cropname));
					Database::disconnect();
					header("Location: user_list.php");
		}
	}
?>

<div style="background-color: limegreen; width: 40%; margin-top: 5%;">
	<br>
	<p style="font-size: 20px; color: black; text-align: center;">ADD</p>	
	<br>
	<form action="" method="POST">

		
		
		<label>Last Name</label>
		<input type="text" name="last_name" placeholder="last_name" value="<?php 
		echo !empty($last_name)?$last_name:''; ?>">
		<?php if (!empty($last_nameError)): ?>
			<span><?php echo $last_nameError; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>First Name</label>
		<input type="text" name="first_name" placeholder="first_name" value="<?php 
		echo !empty($first_name)?$first_name:''; ?>">
		<?php if (!empty($first_nameError)): ?>
			<span><?php echo $first_nameError; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Middle Name</label>
		<input type="text" name="middle_name" placeholder="middle_name" value="<?php 
		echo !empty($middle_name)?$middle_name:''; ?>">
		<?php if (!empty($middle_nameError)): ?>
			<span><?php echo $middle_nameError; ?></span>
		<?php endif; ?>
		<br>
		<br>



		<label>Extension Name</label>
		<input type="text" name="extension_name" placeholder="extension_name" value="<?php echo !empty($extension_name)?$extension_name:''; ?>">
		<?php if (!empty($extension_nameError)): ?>
			<span><?php echo $extension_nameError; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Gender</label>
		<input type="text" name="gender" placeholder="gender" value="<?php 
		echo !empty($gender)?$gender:''; ?>">
		<?php if (!empty($genderError)): ?>
			<span><?php echo $genderError; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>House Street</label>
		<input type="text" name="house_street" placeholder="house_street" value="<?php 
		echo !empty($house_street)?$house_street:''; ?>">
		<?php if (!empty($house_streetError)): ?>
			<span><?php echo $house_streetError; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Farmer Address1</label>
		<input type="text" name="farmer_address1" placeholder="farmer_address1" value="<?php 
		echo !empty($farmer_address1)?$farmer_address1:''; ?>">
		<?php if (!empty($farmer_address1Error)): ?>
			<span><?php echo $farmer_address1Error; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Farmer Address2</label>
		<input type="text" name="farmer_address2" placeholder="farmer_address2" value="<?php 
		echo !empty($farmer_address2)?$farmer_address2:''; ?>">
		<?php if (!empty($farmer_address2Error)): ?>
			<span><?php echo $farmer_address2Error; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Farmer Address3</label>
		<input type="text" name="farmer_address3" placeholder="farmer_address3" value="<?php 
		echo !empty($farmer_address3)?$farmer_address3:''; ?>">
		<?php if (!empty($farmer_address3Error)): ?>
			<span><?php echo $farmer_address3Error; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Parcel Number</label>
		<input type="text" name="parcel_no" placeholder="parcel_no" value="<?php 
		echo !empty($parcel_no)?$parcel_no:''; ?>">
		<?php if (!empty($parcel_noError)): ?>
			<span><?php echo $parcel_noError; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Parcel Address1</label>
		<input type="text" name="parcel_address1" placeholder="parcel_address1" value="<?php 
		echo !empty($parcel_address1)?$parcel_address1:''; ?>">
		<?php if (!empty($parcel_address1Error)): ?>
			<span><?php echo $parcel_address1Error; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Parcel Address2</label>
		<input type="text" name="parcel_address2" placeholder="parcel_address2" value="<?php 
		echo !empty($parcel_address2)?$parcel_address2:''; ?>">
		<?php if (!empty($parcel_address2Error)): ?>
			<span><?php echo $parcel_address2Error; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Parcel Address3</label>
		<input type="text" name="parcel_address3" placeholder="parcel_address3" value="<?php 
		echo !empty($parceladdress3)?$parceladdress3:''; ?>">
		<?php if (!empty($parcel_address3Error)): ?>
			<span><?php echo $parcel_address3Error; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Crop Area</label>
		<input type="text" name="crop_area" placeholder="croparea" value="<?php 
		echo !empty($crop_area)?$crop_area:''; ?>">
		<?php if (!empty($crop_areaError)): ?>
			<span><?php echo $crop_areaError; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Parcel Area</label>
		<input type="text" name="parcel_area" placeholder="parcelarea" value="<?php 
		echo !empty($parcel_area)?$parcel_area:''; ?>">
		<?php if (!empty($parcel_areaError)): ?>
			<span><?php echo $parcel_areaError; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<label>Crop Name</label>
		<input type="text" name="crop_name" placeholder="cropname" value="<?php 
		echo !empty($cropname)?$cropname:''; ?>">
		<?php if (!empty($cropnameError)): ?>
			<span><?php echo $cropnameError; ?></span>
		<?php endif; ?>
		<br>
		<br>

		<button type="submit" style="margin-left: 35%; margin-top: 8%;"> 
			Save </button>
		<a href="user_list.php" style="margin-top: 8%;"> Back </a>
	</form>
</div>

</body>
</html>