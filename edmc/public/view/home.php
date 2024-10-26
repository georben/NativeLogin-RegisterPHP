<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Verdana:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background: linear-gradient(135deg, #f0f0f0 30%, #d9d9d9 100%);
        color: #333;
        font-family: 'Arial', sans-serif;
        height: 100vh;
        margin: 0;
        display: flex;
        flex-direction: column; /* Arrange items vertically */
    }

    .navigations {
        display: flex;
        flex-direction: row; /* Arrange items in a row */
        align-items: center; /* Center items vertically */
        justify-content: space-between; /* Space out navigation links and button */
        padding: 10px 20px;
        background-color: #ffffff; /* Navigation background */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Shadow for depth */
        border-bottom: 1px solid #e0e0e0;
    }

    .navigations nav {
        display: flex;
        flex-direction: row; /* Keep links in a row */
        align-items: center; /* Center links vertically */
        gap: 1rem;
    }

    .navigations nav a {
        color: #333; /* Change link color */
        text-decoration: none;
        font-size: 1.2rem;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        transition: background 0.3s, color 0.3s; /* Transition for background and text color */
        text-align: center;
    }

    .navigations nav a:hover {
        background-color: #3a3e59;
        color: white; /* Change text color on hover */
    }

    .navigations button {
        background-color: #35354b;
        color: #f3f3f3;
        padding: 10px 20px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .navigations button:hover {
        background-color: #484868;
    }

    /* Main content styling */
    .main-content {
        flex: 1;
        padding: 2rem;
        display: flex;
        flex-direction: column; /* Change to column for text alignment */
        align-items: center; /* Center items horizontally */
        justify-content: center; /* Center items vertically */
    }

    .welcome-text {
        font-size: 3rem; 
        font-weight: bold; 
        text-align: center;
        font-family: 'Verdana', sans-serif;
        color: #6b6868;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
        margin-bottom: 0.5rem; /* Space below the welcome text */
    }

    .welcome-subtext {
        font-size: 2rem;
        color: #555; /* Darker subtext color */
        font-style: italic;
        text-align: center;
        margin-top: 0.5rem;
    }
</style>
<body>

<div class="navigations">
    <nav>
        <a href="#home">Home</a>
        <a href="#profile">Profile</a>
        <a href="#settings">Settings</a>
        <a href="#contact">Contact</a>
    </nav>
    <button onclick="user_Logout()">Logout</button>
</div>

<div class="main-content">
    <div class="welcome-text">
        Welcome to Home Page
    </div>
    <div class="welcome-subtext">
        <?php echo htmlspecialchars($username); ?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../lib/js/my.js"></script>
</body>
</html>
