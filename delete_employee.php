<?php
require_once('dbconnect.php');

// Check if e_id is set
if (isset($_POST['e_id'])) {
    // Retrieve e_id from the form
    $e_id = $_POST['e_id'];

    // Prepare SQL statement
    $sql = "DELETE FROM employees WHERE e_id = ?";

    // Prepare and bind SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $e_id);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "Employee deleted successfully.";
    } else {
        echo "Error deleting employee: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Employee ID (e_id) is required.";
}

