<?php
include 'conexion.php';

// Assuming POST method 
$id = isset($_POST['id']) ? $_POST['id'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$nivel = isset($_POST['nivel']) ? $_POST['nivel'] : '';

// Using prepared statements to prevent SQL injection
$stmt = $connect->prepare("UPDATE usuarios SET username=?, password=?, nivel=? WHERE id=?");
$stmt->bind_param("sssi", $username, $password, $nivel, $id);

// Execute the prepared statement
$result = $stmt->execute();

if ($result) {
    // Success
    echo "Data updated successfully";
} else {
    // Error
    echo "Error updating data: " . $stmt->error;
}

$stmt->close();
$connect->close();
?>
