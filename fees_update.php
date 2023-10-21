<head>
    <title>Fees Update</title>
    <link rel="icon" href="talogo2.png" type="image/icon type">
    <style>
        select{
            width: 190px;
            height: 50px;
            font-size: 40px:
            
        }
        option{
            font-size: 25px;
        }
            input {
        padding: 5px;
        margin-top: 5px;
        width: 200px;
        border-radius: 5px;
        border: 1px solid black;
        background-color: transparent;
      } 
      .submit {
        padding: 5px;
        margin-top: 5px;
        width: 150px;
        border-radius: 5px;
        border: 1px solid #4CAF50;
        background-color: transparent;
      } 
  .formbox{
    border-radius: 15px;
    width: 380px;
    height: 220px;
    position: relative;
    margin: 2% auto;
    background: rgba(0,0,0,0.3);
    padding: 10px;
    overflow: hidden;
}
 .label{
  color: violet;
  font-size: 17px;
 }
 .s{
    background-color:transparent;
    border-radius:15px;
  }

      h1 {
    font-size: 3em;
    color: aqua;
    text-align: center;
      }

      h2 {
    font-size: 40px;
    color:black;
  }
  body{
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('background2.jpg');
    text-align: center;
    background-size:cover;
  }
      </style>
</head>
<body>
<a href="finance.php" style="text-decoration:none">
<img src="talogo4.png" alt ="school logo"><br>
</a>
<form method="POST" action="update_fees.php">
<div class="formbox">
    <br>
<label for="reg_no" class="label">Registration Number:</label><br>
  <input type="text" id="reg_no" name="reg_no"><br><br>

        <label for="value" class="label">New Amount:</label><br>
  <input type="number" id="value" name="value"><br><br>
        
	    <input type="submit" name="submit" value="Update" class="l"/>

        </form>
</formbox>
</body>