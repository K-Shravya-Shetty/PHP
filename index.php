<?php
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connect to this database failed due to".mysqli_connect_error());
    }
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $sql="INSERT INTO `trip`.`trip`( `name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    echo $sql;
    if($con->query($sql) == true){
        echo "successfully inserted";
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }
    $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Travel form</title>
</head>
<body>
    <div class="container">
        <h1>welcome to SJEC travel form</h1>
        <p>enter your details  and submit this formto confirm you participation in the trip</p>
        <p class="submitmsg">thanks for submitting your form</p>
        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholer="enter any other info"> </textarea>
            <button class="btn"> Submit</button>
            <button class="btn"> Reset</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>



