<?php

    //DB connection
    require_once('dbconnection.php');

    //sql query
    $sql = mysqli_query($conn, "SELECT * FROM enrollments WHERE id ='".$_GET['id']."' ");
    while($row=mysqli_fetch_array($sql))
    {
        $name = $row['name'];
        $reg_number = $row['reg_number'];
        $phone = $row['phone'];
        $email = $row['email'];
        $course = $row['course'];
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
    <?php
		include('includes/header.php');
	?>
    <div class="sidebar">
		<?php
			include('includes/sidebar.php');
		?>	
	</div>

    <!-- card starts here -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 py-4">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span class="float-left"><i class="fa fa-user fa-lg"></i></span>
                            <span>User Profile</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Username:
                                <span class="badge badge-primary badge-pill"><?php echo $name ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 py-4">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span class="float-left"><i class="fa fa-user fa-lg"></i></span>
                            <span>User Profile</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Reg Number:
                                <span class="badge badge-primary badge-pill"><?php echo $reg_number ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 py-4">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span class="float-left"><i class="fa fa-user fa-lg"></i></span>
                            <span>User Profile</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Email:
                                <span class="badge badge-primary badge-pill"><?php echo $email ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 py-4">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span class="float-left"><i class="fa fa-user fa-lg"></i></span>
                            <span>User Profile</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Phone No.:
                                <span class="badge badge-primary badge-pill"><?php echo $phone ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span class="float-left"><i class="fa fa-user fa-lg"></i></span>
                            <span>User Profile</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Course:
                                <span class="badge badge-primary badge-pill"><?php echo $course ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
  
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>    
</body>
</html>