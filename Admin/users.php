<!DOCTYPE html>

<?php

    session_start();
    
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header("Location: admin.php");
    }

?>

<html lang="en">
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
text-align: left;
}
th {
background-color: #2B547E;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: white;" text="black";>
    <div style="font-family: Arial, Helvetica, sans-serif; display: flex; justify-content: center; flex-direction: column; text-align: center; border: clear; background-color: white">
        <div>
        <h1>Fake Deetz</h1>
        </div>
        <div style="font-family: Arial; font-size: 15px; font-weight: 400; display: flex; flex-direction: row; justify-content: center; align-items: center; height: 44px; background-color: #2B547E;">
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/newUser.php" style="text-decoration: none; margin-left: 70px; margin-right: 70px"><font color="#fafaf">Add New User</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/users.php" style="text-decoration: none; margin-right: 70px;"><font color="#FFD700">Users</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/admin.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Admin</a>
            <a href=http://localhost/10DGS-Fake-Deets-Project/Database/logout.php style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Logout</a>
        </div>
        <div style="padding-top: 1%;">
            <table>
                <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Email Adress</th>
                <th>Home Adress</th>
                <th>Phone Number</th>
                <th>Photo Upload Path</th>
                </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "fake deets";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)   {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM userinfo";
        $results = mysqli_query($conn,$sql);

        if (mysqli_num_rows($results)>0) {

            while($row=mysqli_fetch_array($results)) {
            echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td></tr>";
            }
            echo "</table>";
        }
        $conn->close();
        ?>
        </div>
</body>
</html>