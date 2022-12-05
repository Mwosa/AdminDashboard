<!--php file for displaying edit message details-->
<?php
$msg = '';

    
    //DB connection
    require_once('dbconnection.php');
    $sql= mysqli_query($conn, "SELECT * FROM messages WHERE id = '".$_GET['id']."' ");
    while($row=mysqli_fetch_array($sql))
    {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $subject = $row['subject'];
        $message = $row['message'];
    }

    //update user data
    if(isset( $_POST['updateButton']))
    {
        //fetch form data
        $updateName = $_POST['name'];
        $updateEmail = $_POST['email'];
        $updatePhone = $_POST['phone'];
        $updateSubject = $_POST['subject'];
        $updateMessage = $_POST['message'];
        //sql query
        $sql = mysqli_query($conn, "UPDATE messages SET name='$updateName', email='$updateEmail', phone='$updatePhone', subject='$updateSubject', message='$updateMessage' WHERE id= '".$_GET['id']."' ");
        //check if query is true
        if($sql)
        {
            $msg = "
                    <div class='alert alert-success' role='alert'><strong>Success!</strong>User message updated successfully.</div> 
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
            <div class="card-header bg-dark text-center text-white">Edit User Message</div>  
            <div class="card-body">
            <span><?php echo $msg ?></span>
                <form action="editmessage.php?id=<?php echo $id ?>"  method="POST">
                    <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                        	<label for="name" class="form-label">NAME:</label>
            				<input type="name" value="<?php echo $name ?>" name="name" class="form-control" id="name">
        				</div>
        				<div class="mb-3">
            				<label for="email" class="form-label">EMAIL:</label>
            				<input type="email" value="<?php echo $email ?>" name="email" class="form-control" id="email">
        				</div>
        				<div class="mb-3">
            				<label for="phone" class="form-label">PHONE NUMBER:</label>
            				<input type="phone" value="<?php echo $phone ?>" name="phone" class="form-control" id="phone">
        				</div>
        				<div class="mb-3">
            				<label for="subject" class="form-label">SUBJECT:</label>
            				<select name="subject"  id="subject" class="form-control">
								<option value="<?php echo $subject ?>"><?php echo $subject ?></option>
								<option value="Web Design & Development">Web Design & Development</option>
								<option value="Android Application Development">Android Application Development</option>
								<option value="Cyber Security">Cyber Security</option>
								<option value="Data Analysis">Data Analysis</option>
							</select>
        				</div>
                        <div class="mb-3">
            				<label for="message" class="form-label">MESSAGE:</label>
            				<input type="message" value="<?php echo $message ?>" name="message" class="form-control" id="message">
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