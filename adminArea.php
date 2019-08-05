<!DOCTYPE html>

<?php

    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header("Location: admin.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Area</title>
</head>
<body style="background-color: white;">
    <div style="font-family: Arial, Helvetica, sans-serif; display: flex; justify-content: center; flex-direction: column; text-align: center; border: clear; background-color: white">
        <div style="font-family: Arial; font-size: 15px; font-weight: 400; display: flex; flex-direction: row; justify-content: center; align-items: center; height: 44px; background-color: #2B547E;">
            <a href="http://localhost/10DGS-Fake-Deets-Project/index.php" style="text-decoration: none; margin-left: 70px; margin-right: 70px"><font color="#fafaf">Home</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/generator.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Generator</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/admin.php" style="text-decoration: none; margin-right: 70px;"><font color="#FFD700">Admin</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/contact.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Contact</a>
        </div>
        <div>
        <font color= "black">
            <h1>You have sucessfully logged into the admin area</h1>
        </font>
        </div>
        <div style="padding-top: 2%;">
                <a href="http://localhost/10DGS-Fake-Deets-Project/logout.php" style="text-decoration: none">Logout</a>
        </div>
    </div>
</body>
</html>