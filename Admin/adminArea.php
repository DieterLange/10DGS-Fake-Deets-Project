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
        <div>
        <h1>Fake Deetz</h1>
        </div>
        <div style="font-family: Arial; font-size: 15px; font-weight: 400; display: flex; flex-direction: row; justify-content: center; align-items: center; height: 44px; background-color: #2B547E;">
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/newUser.php" style="text-decoration: none; margin-left: 70px; margin-right: 70px"><font color="#fafaf">Add New User</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/users.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Users</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/admin.php" style="text-decoration: none; margin-right: 70px;"><font color="#FFD700">Admin</a>
            <a href=http://localhost/10DGS-Fake-Deets-Project/Database/logout.php style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Logout</a>
        </div>
        <div>
        <font color= "black">
            <h1>You have sucessfully logged into the admin area</h1>
            <p>Here you can add new users and check all existing user details.
        </font>
        </div>
    </div>
</body>
</html>