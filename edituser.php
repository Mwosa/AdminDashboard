<!--php file for displaying edit user details-->
<?php
    $msg = '';
    //DB connection
    require_once('dbconnection.php');
    $sql= mysqli_query($conn, "SELECT * FROM enrollments WHERE id = '".$_GET['id']."' ");
    while($row=mysqli_fetch_array($sql))
    {
        $name = $row['name'];
        $email = $row['email'];
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
                <span><?php echo $msg ?></span>
                <form method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" value="<?php echo $name ?>" class="form-control" id="username" name="username">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" value="<?php echo $email ?>" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <input type="submit" value="update" class="btn btn-dark btn-sm" name="update">
                    </div>
                </form>
            </div>  
        </div>
    </div>

</body>
</html>