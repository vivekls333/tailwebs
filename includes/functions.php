<?php
function get_students($conn) {
    $sql = "SELECT * FROM students";
    return $conn->query($sql);
}

function add_student($conn, $name, $subject, $marks) {
    $sql = "INSERT INTO students (name, subject, marks) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $subject, $marks);
    return $stmt->execute();
}

function get_student_by_id($conn, $id) {
    $sql = "SELECT * FROM students WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function update_student($conn, $id, $name, $subject, $marks) {
    $sql = "UPDATE students SET name = ?, subject = ?, marks = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssii", $name, $subject, $marks, $id);
    return $stmt->execute();
}

function delete_student($conn, $id) {
    $sql = "DELETE FROM students WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>
