<!DOCTYPE html>
<title>

</title>
<head>
    <STYle>
                body {
    font-family:'Times New Roman';
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('pic1.jpg');
    background-color:;
    background-size: cover;
    padding: 20px;
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
        border-radius: 5px;
        border: 1px solid #4CAF50;
        background-color:;
        font-size: large; 
        }
        .formbox{
    width: 300px;
    height: 170px;
    position: relative;
    margin: 2% auto;
    background: rgba(0,0,0,0.3);
    padding: 10px;
    overflow: hidden;
}
.c{
    font-family:Impact ;
    margin-top: 0%;
}
    </STYle>
</head>
<body>
    <h1>TWILITE PRIMARY SCHOOL</h1>
    <h2 class="c">knowledge is power</h2>
    <h2>Welcome back to the site!</h2><br>
    <h2>Select Your Category</h2>
    <div class="formbox">
      <input type="button" value="TEACHER" onclick="window.location.href='teacher.php';" class="b"><br>
      <input type="button" value="PARENT" onclick="window.location.href='parent.php';" class="b"><br>
      <input type="button" value="FINANCE" onclick="window.location.href='finance.php';" class="b"><br>
    </div>
</body>
</html>