<!DOCTYPE html>

<?php
    session_start();

    $username = "admin";
    $password = "admin";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header("Location: adminArea.php");
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password)
{
            $_SESSION['loggedin'] = true;
            header("Location: adminArea.php");
    	}
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body style="background-color: white;">
    <form method="post" action="admin.php">
        <div style="font-family: Arial, Helvetica, sans-serif; display: flex; justify-content: center; flex-direction: column; text-align: center; border: clear; background-color: white">
            <div style="font-family: Arial; font-size: 15px; font-weight: 400; display: flex; flex-direction: row; justify-content: center; align-items: center; height: 44px; background-color: #2B547E;">
                <a href="http://localhost/10DGS-Fake-Deets-Project/index.php" style="text-decoration: none; margin-left: 70px; margin-right: 70px"><font color="#fafaf">Home</a>
                <a href="http://localhost/10DGS-Fake-Deets-Project/generator.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafafa">Generator</a>
                <a href="http://localhost/10DGS-Fake-Deets-Project/admin.php" style="text-decoration: none; margin-right: 70px;"><font color="#FFD700">Admin</a>
                <a href="http://localhost/10DGS-Fake-Deets-Project/contact.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Contact</a>
            </div>
            <font color="#000">
            <div style="margin-top: 10%; border: clear; border-radius: 20px; background-color: #D3D3D3; height: 250px;  display: flex; justify-content: center; flex-direction: column; text-align: center;
            width: 50%; margin-left: 25%; padding-bottom: 4%; padding-top: 2%;">
            <div>
                <h1>Admin Login</h1>
            <div style="padding-bottom: 1%;">   
                <label>Enter admin username and password to enter admin area,<br>
                if you are not looking for the admin login <a href="http://localhost/10DGS-Fake-Deets-Project/index.php">click here</a></label>
            </div>
            </div>
            <div style="padding-top: 2%;">
                <input type="text" placeholder="Username" name="username" style="height: 40px; font-size: 15px;">
            </div>
            <div style="padding-top: 5%;">
                <input type="password" placeholder="Password" name="password" style="height: 40px; font-size: 15px;">
            <div style="padding-top: 2%;">
                <input type="submit" value="Login" style="width: 115px; height: 35px; border-radius: 10px; background-color: navy; color: white; border-color: white;"></input>
            </div>
            </div>
            </div>
            </font>
        </div>
    </form>
</body>
</html>