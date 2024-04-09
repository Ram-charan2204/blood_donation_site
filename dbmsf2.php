<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
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
        .h{
            margin-left: 43%;
            margin-bottom: -30px;
        }
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
    <title>Document</title>
</head>
<body>
    <h1 class="h">
        Enter Patient details: 
    </h1>
     <div class="home">
        <form action="dbms2.php" method="post">
            <input class="inp" type="text"  placeholder="Enter your name" required>
            <br>
            <input class="inp" type="number" placeholder="Enter age">
            <br> 
            <input class="inp" type="text" placeholder="Enter your mobile number" min="1000000000" max="9999999999">
            <br>
            <select class="inp" name="gender" placeholder="gender">
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
            </select>
            <br>
            <select class="inp" name="bt" class=" sel inp" id="bt">
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
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="dbms.js"></script> 
    </body>
</html>