<?php
include('conn.php');
$sql="SELECT * FROM fees ";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
for($count=0;$row=mysqli_fetch_assoc($result);$count++){
	
print("<tr>");
$no=$count+1;
print("<td>$no</td>");
foreach($row as $key=>$value)
	print("<td>$value</td>");
print("</tr>");
}
}else{
    
print("**There are no current payments**");

}

?>