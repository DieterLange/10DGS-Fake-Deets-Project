<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generator</title>
</head>
<body style="background-color: white;">
    <div style="font-family: Arial, Helvetica, sans-serif; display: flex; justify-content: center; flex-direction: column; text-align: center; border: clear; background-color: white">
        <div style="font-family: Arial; font-size: 15px; font-weight: 400; display: flex; flex-direction: row; justify-content: center; align-items: center; height: 44px; background-color: #2B547E;">
            <a href="http://localhost/10DGS-Fake-Deets-Project/Home/index.php" style="text-decoration: none; margin-left: 70px; margin-right: 70px"><font color="#fafaf">Home</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Home/generator.php" style="text-decoration: none; margin-right: 70px;"><font color="#FFD700">Generator</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/admin.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Admin</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Home/contact.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Contact</a>
        </div>
        <?php
             $servername = "localhost";
             $username = "root";
             $password = "root";
             $dbname = "fake deets";
             $conn = new mysqli($servername, $username, $password, $dbname);
             if ($conn->connect_error)   {
             die("Connection failed: " . $conn->connect_error);
             }

             $sql = "SELECT * FROM userinfo ORDER BY RAND() LIMIT 1";
             $result = mysqli_query($conn, $sql);
        ?>
        <?php
             while($user=mysqli_fetch_array($result)) {
            
                echo "$user['fname']";
                echo "$user['lname']";
                echo "$user['gender']";
             }
        ?>
    </div>
</body>
</html>