<?php      
include('conn.php'); 
if(isset($_POST['submit']))
{
    $reg_no = $_POST['reg_no'];
    $name = $_POST['name'];
    $class = $_POST['class'];  
    $exam = $_POST['exam'];  
    $maths = $_POST['maths'];  
    $eng = $_POST['eng']; 
    $kisw = $_POST['kisw'];
    $scie = $_POST['scie'];
    $sst = $_POST['sst'];
    $re = $_POST['re'];
     $duplicate = mysqli_query($con, "select * from student_result where reg_no='$reg_no'and class='$class' and exam =$exam");
    if($duplicate>0)
    {
        include("marks.php");
        echo "<p style="."color:red;"."> MARKS FOR STUDENT ALREADY EXIST.</p>";
    }
     else {

        if (empty($reg_no) or empty($name) or empty($class) or empty($exam) or empty($maths) or empty($eng) or empty($kisw) or empty($scie) or empty($sst) or empty($re)){
            include("marks.php");
            echo "<p style="."color:red;".">please insert all values.</p>";
        }
        else{

$sql1="INSERT INTO student_result(reg_no,name,class,exam,maths,eng,kisw,scie,sst,re) VALUES('$reg_no','$name','$class','$exam','$maths','$eng','$kisw','$scie','$sst','$re')";
$result=mysqli_query($con,$sql1);

if(($result)){
	echo '<script> alert("INFORMATION for student $reg_no well received!!! ");</script>';
	include("marks.php");
}
else{

    echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';
    include("marks.php");
}
    }
    }
}
mysqli_close($con);
 ?>