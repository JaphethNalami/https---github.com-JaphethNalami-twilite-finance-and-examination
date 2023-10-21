<head>

<title style="font-family:cursive">Fee Updates</title>
<link rel="icon" href="talogo2.png" type="image/icon type">
			<style>
				h1 {
    font-size: 3em;
    color: aqua;
    text-align: center;
      }
	  table{
		margin-top:0px;
	  }
	  h2 {
    font-size: 40px;
    color: #0000FF;}
	  body {
    font-family:'Times New Roman';
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('background2.jpg');
    background-color:white;
    background-size: cover;
    padding: 20px;
	text-align:center;
	
}
			</style>
		</head>
<body>
<a href="finance.php" style="text-decoration:none">
<img src="talogo4.png" alt ="school logo"><br>
</a>
<table border="1"style="overflow:scroll;background-color:#ADD8E6; margin-left:auto;margin-right:auto;border-radius:10px; ">
		<tr style="background-color:white">
			<td>No</td>
			<td>REG_NO</td>
			<td>AMOUNT</td>
			<td>DATE</td>
		</tr>
		<?php
		include("fetchfees.php");
		?>
		</table>
		</body>
