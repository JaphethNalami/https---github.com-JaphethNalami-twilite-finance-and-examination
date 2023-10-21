<?php      
    include('connection.php');
    session_start();

    $email = $_POST['email'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from admin where email = '$email' and password= '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
    
			header('Location:update.php');
			exit();
        }  
        else{  
			$_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid email or password.</p>";
            header('Location:adminlogin.php');
            exit();
        }     
?>  