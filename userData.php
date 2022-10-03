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