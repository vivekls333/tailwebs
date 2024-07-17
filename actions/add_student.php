<?php
include '../includes/db.php';
include '../includes/functions.php';

$name = $_POST['name'];
$subject = $_POST['subject'];
$marks = $_POST['marks'];

if (add_student($conn, $name, $subject, $marks)) {
    header("Location: ../views/teacher_home.php");
} else {
    echo "Error: " . $conn->error;
}
?>
