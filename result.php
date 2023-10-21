<head>
		<title style="font-family:cursive">student results</title>
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
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('background2.jpg');
    background-color: #cccccc;
    background-size: cover;
    padding: 20px;
	text-align:center;
	
}
			</style>
		</head>
<body>
<a href="parent.php" style="text-decoration:none">
<img src="talogo4.png" alt ="school logo"><br>
</a>
<table border="1"style="overflow:scroll;background-color:white; margin-left:auto;margin-right:auto; border-radius:10px; ">
		<tr style="background-color:white">
			<td>No</td>
			<td>REG_NO</td>
			<td>NAME</td>
			<td>CLASS</td>
			<td>EXAM</td>
			<td>MATHEMATICS</td>
			<td>ENGLISH</td>
			<td>KISWAHILI</td>
			<td>SCIENCE</td>
			<td>SOCIAL STIDIES</td>
			<td>RELIGOUS EDUCATUON</td>
			<td>TOTAL</td>
			<td>AVG</td>
			<td>GRADE</td>
		</tr>
		<?php
		include("individual_result.php");
		?>
		</table>
		
		</body>
