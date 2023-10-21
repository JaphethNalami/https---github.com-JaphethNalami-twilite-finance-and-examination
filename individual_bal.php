<head>
<title style="font-family:cursive">Fee balance</title>
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
    color: #0000FF;
    text-align:center;
}
	  body {
    font-family:'Times New Roman';
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('pic17.jpg');
    background-color: #cccccc;
    background-size: cover;
    padding: 20px;
	
}
			</style>
		</head>
<body>
<a href="landlord.php" style="text-decoration:none">
<h1>TWILITE PRIMARY SCHOOL</h1>
</a>
<h2><strong>student result</strong></h2>
<table border="1"style="overflow:scroll;background-color:#ADD8E6; margin-left:auto;margin-right:auto; ">
		<tr style="background-color:#F0E68C">
			<td>No</td>
			<td>REG_NO</td>
			<td>NAME</td>
			<td>CLASS</td>
			<td>BALANCE</td>
		</tr>
		<?php
		include("individual_fee.php");
		?>
		</table>
		
		</body>
