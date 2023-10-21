<!DOCTYPE html>
<title>
    Teacher
</title>
<head>
<link rel="icon" href="talogo2.png" type="image/icon type">
    <STYle>
         body{
               font-family:'Times New Roman';
               background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('background1.jpg');
               background-color:;
               background-size: cover;
               padding: 20px;
               text-align:center;
              }

        h1{
           text-align: center;
           color: rgb(39, 75, 75);
        }

        h2{
            text-align: center;
            color: rgb(37, 89, 134);
        }
        .b{ 
            padding: 5px;
            margin-top: 5px;
            width: 300px;
            height: 50px;
            border-radius: 15px;
            border: 2px solid black;
            background-color:transparent;
            font-size: large; 
            color:white;
        }
        .formbox{
            width: 330px;
            height: 225px;
            position: relative;
            margin: 2% auto;
            background: rgba(0,0,0,0.3);
            padding: 15px;
            overflow: hidden;
            border-radius: 15px;
}
.c{
    font-family:Impact ;
    margin-top: 0%;
}
.l{
    font-size:19px;
    border-radius: 5px;
    font-family:arial;
}
.t{
    border-radius: 5px;
    width: 160px;
    height: 28px;
}
    </STYle>
</head>
<body>
<a href="index.php" style="text-decoration:none">
<img src="talogo4.png" alt ="school logo"><br>
</a>
    <div class="formbox">
    <input type="button"  onclick="window.location.href='marks.php';"value="Enter student marks" class="b"/><br><br>
    <input type="button"  onclick="window.location.href='overal_result.php';"value="Check overal reslts" class="b"/><br><br>
    <input type="button"  onclick="window.location.href='update.php';"value="update students results" class="b"/>
    </div>
</body>
</html>