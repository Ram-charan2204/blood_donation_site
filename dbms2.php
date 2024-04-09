<?php
$conn = mysqli_connect("localhost","root","","dbms");

if(!$conn){
    echo "connection Error" ; 
}
$blood_group=$_POST['bt'];
$query = "select * from donor1 where (blood_type= '$blood_group');";
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dbms1.css">
    <title>Blood bank</title>
    <link rel="icon" type="image/x-icon" href="logo1.jpg">
    <style>
        .home{
            height: auto;
            margin-top: 20px;
            margin-bottom: -60px;
            margin-left: 39%;
        }
        h1{
            margin-left: 47%;
            margin-bottom: -30px;
        }
        .table{
            transform: translateY(100px);
            margin-left: 39%;
            border: 2px solid black;
            border-radius: 20px;
            border-collapse: collapse;
        }
        .table th{
                border: 1px solid #ffffff;
                border-radius: 5px;
                background-color: #000000;
                color: #ffffff;
        }
         .table tr:nth-child(odd){
            background-color: #757575;
        } 
        .table tr td{
            border: 1px solid #000000;
            border-collapse: collapse;
            text-align: center;
            padding: 0px 5px 0px 5px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Available donors: </h1>
<div>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Blood Group</th>
        </tr>
        <tr>
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
                ?>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['mobile_number'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['blood_type'];?></td>
        </tr>
        <?php } ?>
            
        </tr>
    </table>
</div>
</body>
</html>