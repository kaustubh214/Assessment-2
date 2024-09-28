<?php 

function connectToDatabase() 
{ 
    try { 
        // Create a new PDO instance
        $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', '123456'); 

        // Set PDO error mode to exception to enable error reporting
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Return the PDO instance to be used for database interactions
        return $pdo; 

    } catch (PDOException $e) { 
        // If there is an error in the connection, display the error message
        echo $e->getMessage(); 

        // Exit the script to avoid further execution
        exit(); 
    } 
}
?>
