<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTS</title>
    <!-- Link to Pico.css for styling -->
    <link rel="stylesheet" href="/pico.min.css">
</head>

<body>
    <!-- Header section containing navigation -->
    <header class="container">
        <nav>
            <h3>To add Contacts to the database</h3>
            <ul>
                <!-- Link to the page where you can add a new contact -->
                <li><a href="models/add.php">Add Contacts</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content section -->
    <main class="container">
        <h1>Contacts</h1>

        <!-- Contacts table -->
        <table>
            <!-- Table headers -->
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>

            <!-- PHP code to loop through the contacts and display them in the table -->
            <?php foreach ($rows as $row) : ?> <!-- Start of the loop -->
                <tr>
                    <!-- Display each contact's details -->
                    <td><?php echo htmlspecialchars($row["id"]); ?></td>
                    <td><?php echo htmlspecialchars($row["name"]); ?></td>
                    <td><?php echo htmlspecialchars($row["email"]); ?></td>
                    <td><?php echo htmlspecialchars($row["phone"]); ?></td>
                </tr>
            <?php endforeach; ?> <!-- End of the loop -->

        </table>
    </main>
</body>

</html>
