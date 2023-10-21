<html>
<head>
<title>Student Registration</title>
<link rel="icon" href="talogo2.png" type="image/icon type">
        <style>
            input {
        padding: 5px;
        margin-top: 5px;
        width: 200px;
        border-radius: 10px;
        border: 1px solid violet;
        background-color: transparent;
      } 
      .submit {
        padding: 5px;
        margin-top: 5px;
        width: 150px;
        border-radius: 10px;
        border: 1px solid red;
        background-color:transparent;
        color:white;
      } 
      
  .formbox{
    border-radius: 15px;
    width: 380px;
    height: 370px;
    position: relative;
    margin: 2% auto;
    background: rgba(0,0,0,0.3);
    padding: 10px;
    overflow: hidden;
}
 .label{
  color:white;
  font-size: 17px;

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
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('background1.jpg');
    text-align: center;
    background-size:cover;
  }
  .s{
    width:150px;
    height: 30px;
    border-radius:15px;
    background-color:transparent;
    border: 1px solid violet;
    font-size:17px;
  }
      </style>
    </head>
    <a href="finance.php" style="text-decoration:none">
<img src="talogo4.png" alt ="school logo"><br>
</a>
<form   method= 'POST' action='student_input.php'>
<div class="formbox">
  <label for="reg_no" class="label">Reg_No:</label><br>
  <input type="text" id="reg_no" name="reg_no"><br>
  <label for="name" class="label">Name:</label><br>
  <input type="text" id="name" name="name"><br><br>
  <label for="class" class="label">Class:</label><br>
  <select id="class" name="class" class="s">
            <option value="Grade 1">Grade 1</option>
            <option value="Grade 2">Grade 2</option>
            <option value="Grade 3">Grade 3</option>
            <option value="Grade 4">Grade 4</option>
            <option value="Grade 5">Grade 5</option>
            <option value="Grade 6">Grade 6</option>
            <option value="Grade 7">Grade 7</option>
        </select><br><br>
        <label for="fees" class="label">Amount To Be Paid:</label><br>
        <select id="fees" name="fees" class="s">
            <option value="10000">10000</option>
            <option value="15000">15000</option>
            <option value="20000">20000</option>
        </select><br>
  <label for="amount" class="label">Amount Paid:</label><br>
  <input type="number" id="amount" name="amount"><br>
  
<input type="submit" name="submit" value="submit" class="submit">
</div>

</form>
</body>
</html>