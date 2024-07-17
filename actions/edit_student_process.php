<?php
include '../includes/db.php';
include '../includes/functions.php';

$id = $_POST['id'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$marks = $_POST['marks'];

if (update_student($conn, $id, $name, $subject, $marks)) {
    header("Location: ../views/teacher_home.php");
} else {
    echo "Error: " . $conn->error;
}
?>
