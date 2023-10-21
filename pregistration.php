<?php
require('connection.php');
session_start();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $student_reg = $_POST['student_reg'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($id) || empty($student_reg) || empty($name) || empty($phone) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Please fill in all the details.</p>";
        header("Location: parentregister.php");
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid email address.</p>";
        header("Location: parentregister.php");
        exit();
    }
    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid phone number.</p>";
        header("Location: parentregister.php");
        exit();
    }
    if ($password !== $confirm_password) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Passwords do not match.</p>";
        header("Location: parentregister.php");
        exit();
    }

    $stmt = mysqli_prepare($con, "SELECT * FROM parent WHERE email = ? OR student_reg = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $student_reg);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Email or registration number already exists.</p>";
        header("Location: parentregister.php");
        exit();
    }

    $stmt = mysqli_prepare($con, "INSERT INTO parent(id, student_reg, name, phone, email, password) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssssss", $id, $student_reg, $name, $phone, $email, $password);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $_SESSION['status'] = "<p style="."color:green;"."text-align:center".">Registered successfully.</p>";
        header("Location: parentlogin.php");
        exit();
    } else {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Registration failed.</p>";
        header("Location: parentregister.php");
        exit();
    }
}
?>
