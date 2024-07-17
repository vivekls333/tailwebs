<?php
include '../includes/db.php';
include '../includes/functions.php';

$id = $_GET['id'];

if (delete_student($conn, $id)) {
    header("Location: ../views/teacher_home.php");
} else {
    echo "Error: " . $conn->error;
}
?>
