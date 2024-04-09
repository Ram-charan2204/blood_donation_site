<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <link rel="stylesheet" href="dbms1.css">
    <title>Blood bank</title>
    <link rel="icon" type="image/x-icon" href="logo1.jpg">
    <title>Document</title>
</head>
<body>
     <div class="home">
        <form>
            <label class="label" for="name">Donor_Name</label>
            <input class="inp" name="name" type="name" id="name" placeholder="enter your name" required>
            <br>
            <div class="gender">
            <label class="label" for="male">male:</label>
            <input class="inp" name="gender" type="radio" id="male" value="male">
            <br>
            <label class="label" for="female">female:</label>
            <input class="inp" name="gender" type="radio" id="female" value="female">
            <br>
            <label class="label" for="other" value="other">other:</label>
            <input class="inp" name="gender" type="radio" id="other">
            <br>
        </div>
            <label class="label" for="d" >Date of Birth: </label>
            <input name="date" type="number" class="d dob inp" min="1" max="31">
            <input name="month" type="number" class="m dob inp" min="1" max="12">
            <input name="year" type="number" class="y dob inp" min="1900" max="2005">
            <br>
            <label class="label" for="no1">Mobile no.:</label>
            <input name="mobile" class="inp" type="phone" id="no1">
            <br>
            <p class="label">Address: </p>
            <textarea name="address" class="inp add" rows="5" cols="20" id="add"></textarea>
            <br>
            <label class="label" for="weight">weight: </label>
            <input name="weight" class="inp" type="number" name="weight" id="weight" min="40">
            <br>
            <label class="label" for="bp">Blood pressure: </label>
            <input name="bp" lass="inp" type="number" name="bp" id="bp">
            <br>
             A+, A-, B+, B-, O+, O-, AB+, AB-
            <label class="label" for="bt">Blood type: </label>
            <select name="bt" class=" sel inp" name="blood_type" id="bt">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            <br>
            <input name="submit" class="sub" type="submit" value="submit">
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <script src="dbms.js"></script> 
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    };
    $name=$_post['name'];
    $gender=$_post['gender'];
    $date=$_post['date'];
    $month=$_post['month'];
    $year=$_post['year'];
    $mobile=$_post['mobile'];
    $address=$_post['address'];
    $weight=$_post['weight'];
    $bp=$_post['bp'];
    $blood_group=$_post['bt'];
    $dob= $year.'-'.$month.'-'.$date;
    $sql= "INSERT INTO `dbms`.`donor`(`name`, `gender`, `dob`, `mobile no.`, `address`, `weight`, `bp`, `blood_group`)  VALUES ($name, $gender, $dob, $mobile, $address, $weight, $bp, $blood_group);";
    echo $sql;
    ?>
    
    </body>
</html>