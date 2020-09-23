<html>
<head>
	<meta charset="utf-8">
	<title>Employee Info</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	<h1> Welcome to my new page</h1>
	<h2>Veiw all adding info list<a class= "btn btn-info float-right"  href="index.php">Back to Add info</a></h2>
<table class="table table-bordered table-striped">

	<thead>
		
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Product_Name</th>
			<th>Tag_Number</th>
			<th>Configuration</th>
			<th>Action </th>
		</tr>
	</thead>



	<?php
		$conn=mysqli_connect("localhost","root","","risingbd_employee");
		$sql="SELECT * FROM employee_info";
		$result=mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($result)){ ?>
		
	        <tbody>
				<tr>
				 <td> <?php echo $row['ID']; ?></td>
				 <td> <?php echo $row['Name']; ?></td>
				 <td> <?php echo $row['Product_Name']; ?></td>
				 <td> <?php echo $row['Tag_Number']; ?></td>
				 <td> <?php echo $row['Configuration']; ?></td>
				 <td><a class="btn btn-info" href="">Edit</a> &nbsp;
				 <a class="btn btn-info" href="">Delet</a></td>
				
				</tr>
			</tbody>

	<?php
	}
	?>
	</table>

</body>
</html>