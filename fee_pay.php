<html>
<head>
<title style="font-family:cursive">Fee Payment</title>
<link rel="icon" href="talogo2.png" type="image/icon type">
        <style>
            input {
        padding: 5px;
        margin-top: 5px;
        width: 200px;
        border-radius: 15px;
        border: 1px solid black;
        background-color:white;
      } 
      .submit {
        padding: 5px;
        margin-top: 5px;
        width: 150px;
        border-radius: 15px;
        border: 1px solid #4CAF50;
        background-color:black;
        color:white;
      } 
  .formbox{
    border-radius: 15px;
    width: 380px;
    height: 190px;
    position: relative;
    margin: 2% auto;
    background: rgba(0,0,0,0.3);
    padding: 10px;
    overflow: hidden;
}
 .label{
  color:white;
  font-size: 17px;
  border-radius:15px;
 }

  body{
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('background1.jpg');
    text-align: center;
    background-size:cover;
  }
      </style>
    </head>

<body >
<a href="parent.php" style="text-decoration:none">
<img src="talogo4.png" alt ="school logo"><br>
</a>
<form   method= 'POST' action='pay.php'>
<div class="formbox">
  <label for="reg_no" class="label">Registration number:</label><br>
  <input type="text" id="reg_no" name="reg_no"><br><br>
  <label for="fees_paid" class="label">Amount:</label><br>
  <input type="number" id="fees_paid" name="fees_paid"><br><br>
<input type="submit" name="submit" value="make paiment" class="submit">
</div>

</form>
</body>
</html>