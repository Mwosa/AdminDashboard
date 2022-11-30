<!DOCTYPE html>
<html>
<head>
	<?php
		include('includes/links.php');
	?>
</head>


<body>
	<!-- All our code. write here   -->

	<!--to hold all code for our header info-->
	<?php
		include('includes/header.php');
	?>


	<!--to hold all code for our sidebar info-->
	<div class="sidebar">
		<?php
			include('includes/sidebar.php');
		?>
		
	</div>



	<?php
	$msg='';
	//1.DB connection
	require_once('dbconnection.php');

    if(isset ($_POST['messageButton']) ){
       
    //2.insert into table, messages
    
        $insertData = mysqli_query($conn, "INSERT INTO messages(name, email, phone, subject, message)
							 VALUES('$name','$email','$phone','$subject','$message')");
			
	if($insertData)
	{
		$msg= "Data submitted successfully";
	}
	else
	{
		$msg= "Error occured!";
	}
    }
   

	
	?>



	<!--to hold all code for our main content info-->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span><i class="fa fa-pencil"></i> ADD MESASAGE</span> <br>
						<?php
							echo $msg;
						?>
					</div>	
				</div>
				
                <div class="container py-3">
				<form action="addstudent.php" method="post">
                    <div class="card">
                    <div class="card-body row">
                        <div class="mb-3 col-lg-6">
                        	<label for="name" class="form-label">Name:</label>
            				<input type="name" name="name" class="form-control" id="name">
        				</div>
        				<div class="mb-3 col-lg-6">
            				<label for="email" class="form-label">Email:</label>
            				<input type="email" name="email" class="form-control" id="email">
        				</div>
        				<div class="mb-3 col-lg-6">
            				<label for="phone" class="form-label">Phone Number:</label>
            				<input type="phone" name="phone" class="form-control" id="phone">
        				</div>
        				<div class="mb-3 col-lg-6">
            				<label for="course" class="form-label">Subject:</label>
            				<select name="course" id="course" class="form-control">
								<option value="">--select course--</option>
								<option value="Web Design & Development">Web Design & Development</option>
								<option value="Android Application Development">Android Application Development</option>
								<option value="Cyber Security">Cyber Security</option>
								<option value="Data Analysis">Data Analysis</option>
							</select>
        				</div>
                        <div class="mb-3 col-lg-12">
            				<label for="message" class="form-label">Message:</label>
            				<input type="message" name="message" class="form-control" id="message">
        				</div>
						

        				<button class="btn btn-light submit text-white" type="submit" name="messageButton" value="submit">Submit</button>
        
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