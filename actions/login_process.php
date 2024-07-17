<?php
include '../includes/db.php';

$username_email = $_POST['username_email'];
$password = $_POST['password'];

$sql = "SELECT * FROM teachers WHERE username = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username_email, $username_email);
$stmt->execute();
$result = $stmt->get_result();
$teacher = $result->fetch_assoc();

if ($teacher && password_verify($password, $teacher['password'])) {
    session_start();
    $_SESSION['username'] = $teacher['username'];
    header("Location: ../views/teacher_home.php");
} else {
    echo "Invalid credentials";
}
?>
