<!--php file for displaying edit user details-->
<?php
$msg = '';
    
    //DB connection
    require_once('dbconnection.php');
    $sql= mysqli_query($conn, "SELECT * FROM enrollments WHERE id = '".$_GET['id']."' ");
    while($row=mysqli_fetch_array($sql))
    {
        $id = $row['id'];
        $name = $row['name'];
        $reg_number = $row['reg_number'];
        $phone = $row['phone'];
        $email = $row['email'];
        $course = $row['course'];
    }

    //update user data
    if(isset( $_POST['updateButton']))
    {
        //fetch form data
        $updateName = $_POST['name'];
        $updateEmail = $_POST['email'];
        $updateRegNumber = $_POST['reg_number'];
        $updatePhone = $_POST['phone'];
        $updateCourse = $_POST['course'];
        //sql query
        $sql = mysqli_query($conn, "UPDATE enrollments SET name='$updateName', email='$updateEmail', reg_number='$updateRegNumber', phone='$updatePhone', course='$updateCourse' WHERE id= '".$_GET['id']."' ");
        //check if query is true
        if($sql)
        {
            $msg = "
                    <div class='alert alert-success' role='alert'><strong>Success!</strong>User data updated successfully.</div> 
                    ";
        }
        else
        {
            $msg = "
                    <div class='alert alert-danger' role='alert'><strong>Error!</strong>Something went wrong. Please try again</div>
                    ";
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
            <span><?php echo $msg ?></span>
                <form action="edituser.php?id=<?php echo $id ?>"  method="POST">
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
            				<select name="course"  id="course" class="form-control">
								<option value="<?php echo $course ?>"><?php echo $course ?></option>
								<option value="Web Design & Development">Web Design & Development</option>
								<option value="Android Application Development">Android Application Development</option>
								<option value="Cyber Security">Cyber Security</option>
								<option value="Data Analysis">Data Analysis</option>
							</select>
        				</div>
						

        				<button class="btn btn-success submit text-white" type="submit" name="updateButton" >Update</button>
        
    				</div>
    				</div>
				</form>
            </div>  
        </div>
    </div>

</body>
</html>