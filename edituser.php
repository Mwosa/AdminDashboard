<!--php file for displaying edit user details-->
<?php
    
    //DB connection
    require_once('dbconnection.php');
    $sql= mysqli_query($conn, "SELECT * FROM enrollments WHERE id = '".$_GET['id']."' ");
    while($row=mysqli_fetch_array($sql))
    {
        $name = $row['name'];
        $reg_number = $row['reg_number'];
        $phone = $row['phone'];
        $email = $row['email'];
        $course = $row['course'];
    }

    //update user data
    if(isset( $_POST['update']))
    {
        //fetch form data
        $updateName = $_POST['name'];
        $updateEmail = $_POST['email'];
        //sql query
        $sql = mysqli_query($conn, "UPDATE enrollments SET name='$updateName', email='$updateEmail' WHERE id= '".$_GET['id']."' ");
        //check if query is true
        if($query)
        {
            $msg = "User data updated successfully";
        }
        else
        {
            $msg = "Error occured";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
		require_once('includes/links.php');
	?>
</head>
<body>
    <!--to hold all code for our header info-->
	<?php
		require_once('includes/header.php');
	?>
    <!--to hold all code for our sidebar info-->
	<div class="sidebar">
	<?php
		require_once('includes/sidebar.php');
	?>
    </div>
    <!--card to hold the form-->
    <div class="main-content"> 
        <div class="card">
            <div class="card-header bg-dark text-center text-white">Edit User Account Data</div>  
            <div class="card-body">
    
                <form action="edituser.php" method="post">
                    <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                        	<label for="name" class="form-label">NAME:</label>
            				<input type="name" value="<?php echo $name ?>" name="name" class="form-control" id="name">
        				</div>
        				<div class="mb-3">
            				<label for="registration" class="form-label">REG NUMBER:</label>
            				<input type="registration" value="<?php echo $reg_number ?>" name="reg_number" class="form-control" id="registration">
        				</div>
        				<div class="mb-3">
            				<label for="phone" class="form-label">PHONE NO:</label>
            				<input type="phone" value="<?php echo $phone ?>" name="phone" class="form-control" id="phone">
        				</div>
						<div class="mb-3">
            				<label for="email" class="form-label">EMAIL:</label>
            				<input type="email" value="<?php echo $email ?>" name="email" class="form-control" id="email">
        				</div>
        				<div class="mb-3">
            				<label for="course" class="form-label">COURSE:</label>
            				<select name="course" value="<?php echo $course ?>" id="course" class="form-control">
								<option value="">--select course--</option>
								<option value="Web Design & Development">Web Design & Development</option>
								<option value="Android Application Development">Android Application Development</option>
								<option value="Cyber Security">Cyber Security</option>
								<option value="Data Analysis">Data Analysis</option>
							</select>
        				</div>
						

        				<button class="btn btn-light submit text-white" type="submit" name="updateButton" value="submit">Submit</button>
        
    				</div>
    				</div>
				</form>
            </div>  
        </div>
    </div>

</body>
</html>