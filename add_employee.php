<?php
require_once ('dbconnect.php');

// Check if all form fields are set
if (isset($_POST['park_id'], $_POST['salary'], $_POST['job_description'], $_POST['email'], $_POST['phone'], $_POST['e_id'])) {
  // Retrieve form data
  $park_id = $_POST['park_id'];
  $salary = $_POST['salary'];
  $job_description = $_POST['job_description'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $e_id = $_POST['e_id'];

  // Prepare SQL statement
  $sql = "INSERT INTO employees (park_id, salary, job_description, email, phone, e_id) VALUES (?, ?, ?, ?, ?, ?)";

  // Prepare and bind SQL statement
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iisssi", $park_id, $salary, $job_description, $email, $phone, $e_id);

  // Execute SQL statement
  if ($stmt->execute()) {
    echo "Employee information inserted successfully.";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close statement
  $stmt->close();
} else {
  echo "All form fields are required.";
}
