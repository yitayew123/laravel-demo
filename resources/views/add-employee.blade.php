<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
</head>
<body>
<div class="form-container">
    <h1>Add New Employee</h1>
    <form action="add-employee" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter your email" required>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" placeholder="Enter your phone" required>
        
        <button type="submit">Add Employee</button>
    </form>
</div>

<!-- CSS Styling -->
<style>
    /* General Styling */
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f4f4f9;
    }
    /* Form Container */
    .form-container {
        width: 400px;
        padding: 2em;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
    /* Form Elements */
    form label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }
    form input[type="text"],
    form input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1em;
        box-sizing: border-box;
    }
    form input[type="text"]:focus,
    form input[type="email"]:focus {
        outline: none;
        border-color: #3498db;
    }
    form button {
        width: 100%;
        padding: 10px;
        font-size: 1em;
        color: #fff;
        background-color: #3498db;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    form button:hover {
        background-color: #2c80b4;
    }
</style>

</body>
</html>