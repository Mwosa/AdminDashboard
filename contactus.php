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
		$fetchRecords = mysqli_query($conn, "SELECT * FROM messages");
        ?>
	</div>

    
        

   
    <!--to hold all code for our main content info-->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
						<a href="addmessage.php" class="btn btn-sm btn-secondary float-right">Add Message</a>
					</div>
					<div class="card-body">
						<table class="table table-stripped table-hover col-lg-12">
                            <thead>
                                <tr>
                                <th>No.</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Subject</th>
                                <th>Message</th>
                                <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								$count=1;
								 while ( $row= mysqli_fetch_array($fetchRecords)) { ?>
                                <tr>
									<td><?php echo $count ?></td>
                                    <td><?php echo $row["name"] ?></td>
                                    <td><?php echo $row["email"] ?></td>
                                    <td><?php echo $row["phone"] ?></td>
									<td><?php echo $row["subject"] ?></td>
                                    <td><?php echo $row["message"] ?></td>
									<td><?php echo $row["created_at"] ?></td>
                                </tr>
								<?php $count++; } ?>
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