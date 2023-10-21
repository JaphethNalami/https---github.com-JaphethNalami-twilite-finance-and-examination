<?php
require('connection.php');
session_start();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $staff_no = $_POST['staff_no'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($id) || empty($staff_no) || empty($name) || empty($phone) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Please fill in all the Details.</p>";
        header("Location: teacherregister.php");
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid Email Address.</p>";
        header("Location: teacherregister.php");
        exit();
    }
    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid Phone Number.</p>";
        header("Location: teacherregister.php");
        exit();
    }
    if ($password !== $confirm_password) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Passwords do not match.</p>";
        header("Location: teacherregister.php");
        exit();
    }

    $stmt = mysqli_prepare($con, "SELECT * FROM teacher WHERE email = ? OR staff_no = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $staff_no);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Email or Staff Number already Exists.</p>";
        header("Location: teacherregister.php");
        exit();
    }

    $stmt = mysqli_prepare($con, "INSERT INTO teacher(id, staff_no, name, phone, email, password) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssssss", $id, $staff_no, $name, $phone, $email, $password);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $_SESSION['status'] = "<p style="."color:green;"."text-align:center".">Registered Successfully</p>";
        header("Location: teacherlogin.php");
        exit();
    } else {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Registration Failed</p>";
        header("Location: teacherregister.php");
        exit();
    }
}
?>