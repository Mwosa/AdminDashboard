<?php
    //DB connection
    require_once('dbconnection.php');

    //sql query
    $sql = mysqli_query($conn, "DELETE FROM enrollments WHERE id='".$_GET['id']."' ");
    if($sql)
    {
        header('location:students.php');
        echo "user deleted successfully.";
    }
    else
    {
        echo "error occured. please try again";
    }
?>