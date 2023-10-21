<?php
require('connection.php');
session_start();

if (isset($_POST['submit'])) {
    $staff_no = $_POST['staff_no'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($staff_no) || empty($email) || empty($password) ||empty($confirm_password)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Please fill in all the details.</p>";
        header("Location: adminregister.php");
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid email address.</p>";
        header("Location: adminregister.php");
        exit();
    }
    if ($password !== $confirm_password) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Passwords do not match.</p>";
        header("Location: adminregister.php");
        exit();
    }
    $stmt = mysqli_prepare($con, "SELECT * FROM teacher WHERE staff_no = ?");
    mysqli_stmt_bind_param($stmt, "s", $staff_no);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Staff number not found in the teacher records. Please contact the school administrator.</p>";
        header("Location: adminregister.php");
        exit();
    }

    $stmt = mysqli_prepare($con, "SELECT * FROM admin WHERE staff_no = ? OR email = ?");
    mysqli_stmt_bind_param($stmt, "ss", $staff_no, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Email or Staff Number already exists.</p>";
        header("Location: parentregister.php");
        exit();
    }


    // Insert the parent details into the "parent" table
    $stmt = mysqli_prepare($con, "INSERT INTO admin(staff_no, email, password) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss",$staff_no, $email, $password);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $_SESSION['status'] = "<p style="."color:green;"."text-align:center".">Registered successfully.</p>";
        header("Location: adminlogin.php");
        exit();
    } else {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Registration failed.</p>";
        header("Location: parentregister.php");
        exit();
    }
}
?>
