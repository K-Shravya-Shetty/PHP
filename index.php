<?php
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connect to this database failed due to".mysqli_connect_error());
    }
    //echo "successfully connected"
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $descr=$_POST['descr'];
    $sql="INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `descr`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$descr', current_timestamp());";
    echo $sql;
?>
