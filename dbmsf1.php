<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <link rel="stylesheet" href="dbms1.css">
    <title>Blood bank</title>
    <link rel="icon" type="image/x-icon" href="logo1.jpg">
    <style>
        .btn{
  background-color: #000000 !important;
  color: #ffffff !important;
  font-size: 1.5rem;
  border: 1px solid white;
  border-radius: 4px;
  transform: translate(50px,10px);
}
.btn:hover{
  background-color: #ffffff !important;
  color: #000000 !important;
  cursor: pointer;
}
.btn:active{
  background-color: olive;
}
    </style>
    <title>Blood bank</title>
</head>
<body>
    <h1 class="h">Enter Donor Details: </h1>
     <div class="home">
        <form action="dbms1.php" method="post">
            <input class="inp" type="text" name="name"  placeholder="Enter your name" required>
            <br>
            <input class="inp" type="number" name="age" placeholder="Enter age" min="19">
            <br> 
            <input class="inp" type="text" name="mobile" placeholder="Enter your mobile number" min="1000000000" max="9999999999" required>
            <br>
            <input class="inp" type="email" name="email" placeholder="Enter email">
            <br>
            <select class="inp sel" name="gender" id="gender" placeholder="gender">
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
            </select>
            <br>
            <select class="inp" name="bt" class=" sel inp" name="blood_type" id="bt" required>
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
            <button class="btn" >Submit</button>
        </form>
        
    </div>
    <script src="dbms.js"></script> 
    </body>
</html>