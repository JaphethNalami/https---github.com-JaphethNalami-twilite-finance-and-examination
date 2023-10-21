<head>
    <title>Overal result</title>
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
        border-radius: 15px;
        border: 1px solid black;
        background-color:transparent;
      } 
      .submit {
        padding: 5px;
        margin-top: 5px;
        width: 150px;
        border-radius: 5px;
        border: 1px solid #4CAF50;
        background-color: green;
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
  color: aqua;
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
    background-color:transparent;
    border-radius:15px;
  }
      </style>
</head>
<body>
<a href="teacher.php" style="text-decoration:none">
<img src="talogo4.png" alt ="school logo"><br>
</a>
<form method="POST" action="overal_view.php">
<div class="formbox">
<select id="class" name="class" class="s">
            <option value="Grade 1">Grade 1</option>
            <option value="Grade 2">Grade 2</option>
            <option value="Grade 3" selected>Grade 3</option>
            <option value="Grade 4">Grade 4</option>
            <option value="Grade 5">Grade 5</option>
            <option value="Grade 6">Grade 6</option>
            <option value="Grade 7">Grade 7</option>
        </select><br><br>
        <select id="exam" name="exam" class="s">
            <option value="Term 1">Term 1</option>
            <option value="Term 2" selected>Term 2</option>
            <option value="Term 3">Term 3</option>
        </select><br><br>
        
	    <input type="submit" name="submit" value="check" class="l"/>

        </form>
</formbox>
</body>