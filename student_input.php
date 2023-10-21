<?php      
include('conn.php'); 
if(isset($_POST['submit']))
{
    $reg_no = $_POST['reg_no'];
    $name = $_POST['name'];
    $class = $_POST['class'];  
    $fees = $_POST['fees'];  
    $amount = $_POST['amount'];  
     $duplicate = mysqli_query($con, "select * from student_finance where reg_no='$reg_no'");

        if (empty($reg_no) or empty($name) or empty($class) or empty($fees) or empty($amount)){
            include("student_register.php");
            echo "<p style="."color:red;".">please insert all values.</p>";
        }
        else{

$sql1="INSERT INTO student_finance(reg_no,name,class,fees,fee_paid) VALUES('$reg_no','$name','$class','$fees','$amount')";
$result=mysqli_query($con,$sql1);

if(($result)){
	echo '<script> alert("Registration Successful!!! ");</script>';
	include("student_register.php");
}
else{

    echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';
    include("student_register.php");
}
    }
    
}
mysqli_close($con);
 ?>