<?php
    require_once('dbconnection.php');

    if(isset($_POST['registerUser']) )
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
        //check if email exists
        $sqlEmail = mysqli_query($conn, "SELECT * FROM account
                    WHERE email='$email' ");
        $checkEmail = mysqli_num_rows($sqlEmail);

        if($checkUsername !=0){
            $msg = "Username already exists";
        }
        elseif($checkEmail !=0){
            $msg = "Email is already in use";
        }
        elseif($password != $cpass){
            $msg = "passwords do not match!";
        }
        //submit data to the DB
        else{
            $sql= mysqli_query($conn, "INSERT INTO account (username, email, password)
                                VALUES('$username','$email','$password')");
        if($sql)
        {
            $msg = "Data submitted successfully.";
        }
        else
        {
            $msg = "Error!";
        }
        
        }

    }
?>