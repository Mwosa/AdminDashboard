<?php
    require_once('dbconnection.php');

    if(isset($_POST['register']) )
    {
        //fetch form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpass = $_POST['cpassword'];

        //check if username exists in the DB
        $sqlUsername = mysqli_query($conn, "SELECT * FROM account
                         WHERE username='$username' ");
        $checkUsername = mysqli_num_rows($sqlUsername);

        if($checkUsername !=0){
            msg = "Username already exists";
        }

    }
?>