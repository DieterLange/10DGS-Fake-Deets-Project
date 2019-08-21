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
        <div style="font-family: Arial, Helvetica, sans-serif; margin-left: 38%; margin-top: 15%; padding-bottom: 1%; padding-top: 1%; display: flex; justify-content: center; flex-direction: column; text-align: center; 
            border: clear; border-radius: 20px; background-color: #D3D3D3; width: 25%;">
        <!--<img src="https://i.imgur.com/jLDJbOK.jpg" title="source: imgur.com" />-->
        <font color="#000">
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
            $results = mysqli_query($conn,$sql);

            if (mysqli_num_rows($results)>0) {

                while($row=mysqli_fetch_array($results)) {
                    $photo = $row[8];
                    echo "$photo";
                    echo "Name: ".$row[1]." ".$row[2]."<br><br< Gender: ".$row[3]."<br><br> Date of Birth: ".$row[4]."<br><br> Email Adress: ".$row[5]."<br><br> Home Adress: ".$row[6]."<br><br> Phone Number: ".$row[7]."<br><br> Photo: ".$row[8];
                }
            }
            
        ?>
        <div style="padding-top: 2%;">
        <form method=POST action="">
        <input type="submit" value="Generate Fake User" style="width: 150px; height: 35px; border-radius: 10px; background-color: navy; color: white; border-color: white;">
        </div>
        </div>
        </font>
    </div>
</body>
</html>