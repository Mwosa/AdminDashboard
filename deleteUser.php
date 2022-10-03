<?php
    //DB connection
    require_once('dbconnection.php');

    //sql query
    $sql = mysqli_query($conn, "DELETE FROM enrollments WHERE id='".$_GET['id']."' ");
    if($sql)
    {
        echo "user deleted successfully.";
        header('location:displayUser.php');
    }
    else
    {
        echo "error occured. please try again";
    }
?>