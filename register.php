<?php
$msg = '';
require_once('processRegister.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <section class="container-fluid">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h3 class="text-white p-4 text-center">Zalego | Admin Register</h3>
            <span><?php echo $msg ?></span>
        </div>
    </section>

    <section>
        <div class="logoo">
            <img src="./images/zlgo.PNG" alt="zalego logo" class="logo">
        </div>
        
    </section>

 
<div class="container py-3">
    <div class="card">
    <div class="card-body">
        
        <div class="mb-3">
            <label for="name" class="form-label">Username:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Confirm Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button class="btn btn-light" type="button" value="submit" name="registerUser">Register</button>

        <p>Have an account? Sign in<a href="login.php" class="here"> here</a></p>
        
        
    </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>