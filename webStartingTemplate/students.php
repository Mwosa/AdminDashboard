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
</head>


<body>
	<!-- All our code. write here   -->

	<!--to hold all code for our header info-->
	<div class="header">
		<img src="./images/zlgo.PNG" alt="zalego logo" height="50" width="50" class="rounded-circle">

	</div>


	<!--to hold all code for our sidebar info-->
	<div class="sidebar">
		<nav>
			<ul>
				<li>
					<a href="index.php">
						<span><i class="fa fa-tachometer"></i></span>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-group"></i> </span>
						<span>Students</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-folder-open"></i> </span>
						<span>Courses</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-graduation-cap"></i> </span>
						<span>Campus</span>
					</a>
				</li>
			</ul>
		</nav>

	</div>


	<!--to hold all code for our main content info-->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Reg No</th>
                                    <th>Phone Number</th>
                                    <th>Course</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>NELSON</td>
                                    <td>077756658</td>
                                    <td>Web dev</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="#" class="btn btn-primary btn-sm">View</a>
                                        <a href="#" class="btn btn-primary btn-sm">Delete</a>
                                    </td>
                                </tr>
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