<?php
include('conn.php');
$reg_no=$_POST['reg_no'];
$class=$_POST['class'];
$exam=$_POST['exam'];
$subject=$_POST['subject'];
$value=$_POST['value'];
if (empty($reg_no) or empty($value) ){
    include("update.php");
    echo "<p style="."color:red;".">please insert all values.</p>";
}
else{
$sql="UPDATE student_result SET $subject = $value WHERE reg_no='$reg_no' and class='$class' and exam='$exam' ";
$result=mysqli_query($con,$sql);
if($result)
{
	echo '<script> alert("Update for student  well received!!! ");</script>';
	include("overal_result.php");
}

else{
    echo '<script> alert("update for  student not made!!! ");</script>';
    include("update.php");

}
}

?>