<?php
include('conn.php');
$reg_no=$_POST['reg_no'];
$value=$_POST['value'];
if (empty($reg_no) or empty($value) ){
    include("fees_update.php");
    echo "<p style="."color:red;".">please insert all values.</p>";
}
else{
$sql="UPDATE student_finance SET fee_paid = $value WHERE reg_no='$reg_no' ";
$result=mysqli_query($con,$sql);
if($result)
{
	echo '<script> alert("Update for student  well received!!! ");</script>';
	include("fees_update.php");
}

else{
    echo '<script> alert("update for  student not made!!! ");</script>';
    include("fees_update.php");

}
}

?>