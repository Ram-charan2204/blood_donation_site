<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    echo "success connecting to the db";
    $name=$_POST['name'];
    echo "success connecting to the db";
    ?>