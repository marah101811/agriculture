<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
		 <a href="add.php"> 
			<button style="margin-left: 80%; width: 20%; "> Add
			
			</button>
		 </a>

</center>


<table>
	
	<thead>
			<tr>
				
				<th>Date of Application</th>
				<th>Application Number</th>
				<th>Category</th>
				<th>Bussiness Name</th>
				<th>Role</th>
				<th>Application Status</th>
				<th>Date Approved</th>
			</tr>
	</thead>

<tbody>
<?php 

include 'db_connections.php';
$pdo = Database::connect();
$sql = 'SELECT * FROM application ORDER BY id ASC';
foreach ($pdo->query($sql) as $row)

{

	echo '<tr>';
	echo '<td>'.$row['date_of_application'].'</td>';
	echo '<td>'.$row['application_no'].'</td>';
	echo '<td>'.$row['category'].'</td>';
	echo '<td>'.$row['business_name'].'</td>';
	echo '<td>'.$row['role'].'</td>';
	echo '<td>'.$row['application_status'].'</td>';
	echo '<td>'.$row['date_approved'].'</td>';



	echo '<td>
				<a href="view.php?id='.$row['id'].'"><button>View</button></a>
				<a href="update.php?id='.$row['id'].'"><button>Edit</button></a>
				<a href="Delete.php?id='.$row['id'].'"><button>Delete</button></a>
		</td>';	
	echo '<tr>';
	
}

Database::disconnect();



?>


</tbody>
</table>


</body>
</html>