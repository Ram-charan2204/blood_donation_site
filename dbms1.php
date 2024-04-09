<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <link rel="stylesheet" href="dbms1.css">
    <title>Blood bank</title>
    <link rel="icon" type="image/x-icon" href="logo1.jpg">
    <style>
.quo i b{
  font-size: 50px;
  color: olivedrab;
  transform: translate(600px,150px);
  margin:auto;
  text-decoration: underline;
}
    </style>
    <title>Blood bank</title>
</head>
<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $con=mysqli_connect($server,$username,$password,"dbms");
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    $name=$_POST['name'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $blood_group=$_POST['bt'];
    $sql= "INSERT INTO donor1 (`name`, `age`, `mobile_number`, `email`, `gender`, `blood_type`) VALUES ('$name', '$age', '$mobile', '$email','$gender', '$blood_group');";
    if($con->query($sql)==true){
        echo "<p class='quo'  style='margin-top: 50px;'> <i><b>Thank you for registering.<br>we'll contact you shortly.</b></i> </p>";
    }
    else{
        echo "'ERROR:'. $sql '<br>'. $con->error";
    }
    ?>
    
    <script src="dbms.js"></script> 
    </body>
</html>
 