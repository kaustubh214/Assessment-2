<?php
include "function.php";

$pdo = connectToDatabase();

$query = "SELECT * FROM contacts";

$statement = $pdo->prepare($query);

$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

include "views/index.view.php"; 
