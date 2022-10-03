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

	<?php
		//1. DB connection
		require_once('dbconnection.php');
		//2. Fetch all records
		$fetchStudentRecords = mysqli_query($conn, "SELECT * FROM enrollments");
	?>
	</div>
	


	<!--to hold all code for our main content info-->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
						<a href="AddStudent.php" class="btn btn-sm btn-secondary float-right">Add Student</a>
					</div>
					<div class="card-body">
						<table class="table table-stripped table-hover col-lg-12">
                            <thead>
                                <tr>
								<th>No.</th>
								<th>Name</th>
								<th>Reg Number</th>
								<th>Phone Number</th>
                                <th>Email</th>
                                <th>Course</th>
                            	<th>Enrolled on</th>
								<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php while ( $row= mysqli_fetch_array($fetchStudentRecords)) { ?>
                                <tr>
									<td><?php echo $row["id"] ?></td>
                                    <td><?php echo $row["name"] ?></td>
									<td><?php echo $row["reg_number"] ?></td>
                                    <td><?php echo $row["phone"] ?></td>
									<td><?php echo $row["email"] ?></td>
									<td><?php echo $row["course"] ?></td>
									<td><?php echo $row["created_at"] ?></td>
                                    <td>
                                        <a href="edituser.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="userData.php?id=<?php echo $row['id']?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="deleteUser.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
								<?php } ?>
                            </tbody>
                        </table>
					</div>
					<div class="card-footer"></div>
				</div>

				

			</div>

		</div>

	</div>

	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>