<!DOCTYPE html>

<head>
<title>Parent</title>
<link rel="icon" href="talogo2.png" type="image/icon type">
    <STYle>
         body{
               font-family:'Times New Roman';
               background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('background2.jpg');
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
            color: violet;
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
            width: 360px;
            height: 390px;
            position: relative;
            margin: 2% auto;
            background: rgba(0,0,0,0.3);
            padding: 10px;
            overflow: hidden;
            border-radius: 15px;
}
.c{
    font-family:Impact ;
    margin-top: 0%;
}
.l{
    font-size:19px;
    border-radius: 10px;
    font-family:arial;
    color:white;
    background-color:transparent;
}
.t{
    border-radius: 10px;
    width: 160px;
    height: 28px;
    background-color:transparent;
    color:black;
    font-size:20px;

}
    </STYle>
</head>
<body>
<a href="index.php" style="text-decoration:none">
<img src="talogo4.png" alt ="school logo"><br>
</a>
    <div class="formbox">
    <form method="POST" action="result.php">
        <h2>Check result for individual students</h2>
        <label for="reg_no" class="l">Pupil's reg number:</label>
        <input type="text" id="reg_no" name="reg_no" class="t"><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	    <input type="submit" name="submit" value="check" class="l"/>
    </form>
    <form  method="POST" action="individual_balance.php">
        <h2>Enquire fee balance for  student</h2>
        <label for="reg_no" class="l">Pupil reg number:</label>
        <input type="text" id="reg_no" name="reg_no" class="t"><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	    <input type="submit" name="submit" value="Enquire" class="l"/>
    </form>
    <br>
    &emsp;
    <input type="button"  onclick="window.location.href='fee_pay.php';"value="Pay school fees" class="b"/>
    </div>
</body>
</html>