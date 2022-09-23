<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Nelson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AddStudent.css">
</head>


<body>
	<!-- All our code. write here   -->

	<!--to hold all code for our header info-->
	<?php
		include('includes/header.php')
	?>


	<!--to hold all code for our sidebar info-->
	<div class="sidebar">
		<?php
			include('includes/sidebar.php')
		?>
		
	</div>



	<?php
	$message="";
	//1.DB connection
	require_once('dbconnection.php');

	//2.check if form fields have values
	if(isset ($_POST['enrollmentButton']) ){
	//fetch form values
	$studentName = $_POST['name'];
	$regNumber = $_POST['reg_number'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$course = $_POST['course'];

	//3.insert into table, enrollments
	$insertRecords = mysqli_query($conn, "INSERT INTO enrollments(name, reg_number, phone, email, course)
							 VALUES('$studentName','$regNumber','$phone','$email','$course')");
			
	if($insertRecords)
	{
		$message= "Data submitted successfully";
	}
	else
	{
		$message= "Error occured!";
	}

	}
	?>



	<!--to hold all code for our main content info-->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span><i class="fa fa-pencil"></i> ADD STUDENT</span> <br>
						<?php
							echo $message;
						?>
					</div>	
				</div>
				
                <div class="container py-3">
				<form action="addstudent.php" method="post">
                    <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                        	<label for="name" class="form-label">NAME:</label>
            				<input type="name" name="name" class="form-control" id="name">
        				</div>
        				<div class="mb-3">
            				<label for="registration" class="form-label">REG NUMBER:</label>
            				<input type="registration" name="reg_number" class="form-control" id="registration">
        				</div>
        				<div class="mb-3">
            				<label for="phone" class="form-label">PHONE NO:</label>
            				<input type="phone" name="phone" class="form-control" id="phone">
        				</div>
						<div class="mb-3">
            				<label for="email" class="form-label">EMAIL:</label>
            				<input type="email" name="email" class="form-control" id="email">
        				</div>
        				<div class="mb-3">
            				<label for="course" class="form-label">COURSE:</label>
            				<select name="course" id="course" class="form-control">
								<option value="">--select course--</option>
								<option value="Web Design & Development">Web Design & Development</option>
								<option value="Android Application Development">Android Application Development</option>
								<option value="Cyber Security">Cyber Security</option>
								<option value="Data Analysis">Data Analysis</option>
							</select>
        				</div>
						

        				<button class="btn btn-light submit text-white" type="submit" name="enrollmentButton" value="submit">Submit</button>
        
    				</div>
    				</div>
				</form>
				</div>


			</div>

		</div>

	</div>

	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>