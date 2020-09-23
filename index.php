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
	<h2>Add all info<a class= "btn btn-info float-right"  href="submit.php">Veiw all Data</a> </h2>
	
	<?php
	if(isset ($_POST['btn'])){
	$conn=mysqli_connect("localhost","root","","risingbd_employee");
	$ID=$_POST['ID'];
	$Name=$_POST['Name'];
	$Product_Name=$_POST['Product_Name'];
	$Tag_Number=$_POST['Tag_Number'];
	$Configuration=$_POST['Configuration'];
	$sql="INSERT INTO employee_info(ID,Name,Product_Name,Tag_Number,Configuration) VALUES('$ID','$Name','$Product_Name','$Tag_Number','$Configuration')";
	if($result=mysqli_query($conn,$sql))
	{
		echo "Data Saved Successfully";
		
	}else{
		echo "sorry data is not saved";
	}
}


	?>
	
	<form method="POST" action="">
		<div class="form-row">
			<div class="col-md-4">
				<label>ID</label>
				<input type="text" name="ID" class="form-control"></div>

				<div class="col-md-4">
				<label>Name</label>
				<input type="text" name="Name" class="form-control"></div>

				<div class="col-md-4">
				<label>Product_Name</label>
				<input type="text" name="Product_Name" class="form-control">
			    </div>

				<div class="col-md-4">
				<label>	Tag_Number</label>
				<input type="text" name="Tag_Number" class="form-control">
			    </div>

			    <div class="col-md-4">
				<label>	Configuration</label>
				<input type="text" name="Configuration" class="form-control">
			    </div>

			    <div class="col-md-4" style= "padding-top: 30px;">
			    	
			   
			    	<button type="submit" class="btn btn-primary" name="btn">Submit</button>
			    </div>









		</div>
	</form>




	
</body>
</html>