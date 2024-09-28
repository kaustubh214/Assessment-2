<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management System</title>
    <!-- Link to Pico.css for styling -->
    <link rel="stylesheet" href="/pico.min.css">
</head>

<body>
    <main>
        <!-- Container for the form header -->
        <header class="container">
            <h1>Add New Contact</h1>
            <!-- Contact form for user input -->
            <form method="post" action=""> <!-- Make sure to set the correct action -->
                
                <!-- Name input field with label -->
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter name" required>
                
                <!-- Email input field with label -->
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email" required>
                
                <!-- Phone input field with label -->
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Enter phone number" required>
                
                <!-- Submit button for the form -->
                <input type="submit" value="Add Contact">
            </form>
        </header>
    </main>
</body>

</html>
