<html>
<head>
<title>Marks input</title>
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
    height: 490px;
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
      </style>
    </head>
    <a href="teacher.php" style="text-decoration:none">
<img src="talogo4.png" alt ="school logo"><br>
</a>
<form   method= 'POST' action='mark_input.php'>
<div class="formbox">
  <label for="reg_no" class="label">Reg_No:</label><br>
  <input type="text" id="reg_no" name="reg_no"><br>
  <label for="name" class="label">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <select id="class" name="class">
            <option value="Grade 1">Grade 1</option>
            <option value="Grade 2">Grade 2</option>
            <option value="Grade 3">Grade 3</option>
            <option value="Grade 4">Grade 4</option>
            <option value="Grade 5">Grade 5</option>
            <option value="Grade 6">Grade 6</option>
            <option value="Grade 7">Grade 7</option>
        </select><br>
        <select id="exam" name="exam">
            <option value="Term 1">Term 1</option>
            <option value="Term 2">Term 2</option>
            <option value="Term 3">Term 3</option>
        </select><br>
  <label for="maths" class="label">Mathematics:</label><br>
  <input type="number" id="maths" name="maths"><br>
  <label for="eng" class="label">English:</label><br>
  <input type="number" id="eng" name="eng"><br>
  <label for="kisw" class="label">Kiswahili:</label><br>
  <input type="number" id="kisw" name="kisw"><br>
  <label for="scie" class="label">Science:</label><br>
  <input type="number" id="scie" name="scie"><br>
  <label for="sst" class="label">Social studies:</label><br>
  <input type="number" id="sst" name="sst"><br>
  <label for="re" class="label">Religious Education:</label><br>
  <input type="number" id="re" name="re"><br>
<input type="submit" name="submit" value="submit" class="submit">
</div>

</form>
</body>
</html>