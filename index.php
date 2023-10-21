<!DOCTYPE html>

<head>
<title>
Home page
</title>
<link rel="icon" href="talogo2.png" type="image/icon type">
    <STYle>
                body {
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
            color: white;
        }
        .b{
            
        padding: 5px;
        margin-top: 5px;
        width: 300px;
        height: 50px;
        border-radius: 15px;
        border: 1px solid black;
        background-color:transparent;
        font-size: large; 
        }
        .formbox{
    width: 340px;
    height: 290px;
    position: relative;
    margin: auto;
    background: rgba(0,0,0,0.3);
    padding: 10px;
    overflow: hidden;
    border-radius:15px;
}
.c{
    font-family:Impact ;
    margin-top: 0%;
}
    </STYle>
</head>
<body>
    <img src="talogo4.png" alt ="school logo">
    <div class="formbox">
    <h2>Select Your Category</h2>
      <input type="button" value="TEACHER" onclick="window.location.href='teacherlogin.php';" class="b"><br><br>
      <input type="button" value="PARENT" onclick="window.location.href='parentlogin.php';" class="b"><br><br>
      <input type="button" value="FINANCE" onclick="window.location.href='financelogin.php';" class="b"><br>
    </div>
</body>
</html>