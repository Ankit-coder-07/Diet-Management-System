<?php
require 'connection.php';

// Process the form submission
$email = $_POST["email"];
$password = $_POST["password"];

// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT * FROM register WHERE Email = ? AND Password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows == 1) {
    // User found, perform login action
    echo "<h1>Login Successful</h1>";
    // Further actions can be performed here, such as setting session variables, redirecting to a dashboard, etc.
    
    // Get the RID value from the database
    $row2 = $result->fetch_assoc();
    $RID = $row2['RID'];
    
    // Redirect to the login.php page with RID parameter
    header("Location: profile.php?RID=$RID");

    exit();
   
} else {
    echo "<script>alert('Login Failed! Invalid credentials'); window.location.href = '../html/Registration.html';</script>";
    exit();
}


?>
