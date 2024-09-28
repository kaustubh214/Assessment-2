<?php  
// Include the database connection and other helper functions
include "function.php"; 

// Check if the form has been submitted
if (isset($_POST['name'])) { 

    // Retrieve form data safely
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 

    // Connect to the database using a function from function.php
    $pdo = connectToDatabase(); 

    // Prepare the SQL query with named placeholders to prevent SQL injection
    $query = "INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)"; 

    // Prepare the statement
    $statement = $pdo->prepare($query); 

    // Bind parameters to the query using named placeholders
    $statement->bindParam(':name', $name);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':phone', $phone);

    // Execute the query
    $statement->execute(); 

    // Redirect to the index page after a successful insert
    header('Location: ../index.php'); 

    // Exit to ensure no further code is executed after redirection
    exit; 
} 

// Include the view to show 
