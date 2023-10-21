<?php      
include('conn.php'); 
if(isset($_POST['submit']))
{
    $reg_no = $_POST['reg_no'];
    $fees_paid = $_POST['fees_paid'];

        if (empty($reg_no) or empty($fees_paid) ){
            include("fee_pay.php");
            echo "<p style="."color:red;".">please insert all values.</p>";
        }
        else{

$sql1="INSERT INTO fees (reg_no,fees_paid) VALUES('$reg_no','$fees_paid')";
$result=mysqli_query($con,$sql1);

if(($result)){
    include("parent.php");
	echo "<p style="."color:red;text-align:center".">Fees for $reg_no has been received.</p>";
	
}
else{

    echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';
    include("fee_pay.php");
}
    }
    
}
mysqli_close($con);
 ?>