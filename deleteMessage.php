<?php
    //DB connection
    require_once('dbconnection.php');

    //sql query
    $sql = mysqli_query($conn, "DELETE FROM messages WHERE id='".$_GET['id']."' ");
    if($sql)
    {
        header('location:contactus.php');
        echo "user deleted successfully.";
    }
    else
    {
        echo "error occured. please try again";
    }
?>