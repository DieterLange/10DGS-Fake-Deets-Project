<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generator</title>
</head>
<body style="background-color: white;">
    <form method=POST action="">
    <div style="font-family: Arial, Helvetica, sans-serif; display: flex; justify-content: center; flex-direction: column; text-align: center; border: clear; background-color: white">
        <div>
        <h1>Fake Deetz</h1>
        </div>
        <div style="font-family: Arial; font-size: 15px; font-weight: 400; display: flex; flex-direction: row; justify-content: center; align-items: center; height: 44px; background-color: #2B547E;">
            <a href="http://localhost/10DGS-Fake-Deets-Project/Home/index.php" style="text-decoration: none; margin-left: 70px; margin-right: 70px"><font color="#fafaf">Home</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Home/generator.php" style="text-decoration: none; margin-right: 70px;"><font color="#FFD700">Generator</a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/admin.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Admin</a>
        </div>
        <div style="font-family: Arial, Helvetica, sans-serif; margin-left: 38%; margin-top: 5%; padding-bottom: 1%; padding-top: 1%; display: flex; justify-content: center; flex-direction: column; text-align: center; 
            border: clear; border-radius: 20px; background-color: #D3D3D3; width: 25%;">
        <font color="#000">
        <div>
        <h3>To generate a new user press the generate button</h3>
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
            $results = mysqli_query($conn,$sql);

            if (mysqli_num_rows($results)>0) {

                while($row=mysqli_fetch_array($results)) {
                    $photo = $row[8];
                    echo '<img alt="Fake user image" src="'.$photo.'" width="200"/><br><br>';
                    echo "Name: ".$row[1]." ".$row[2]."<br><br> Gender: ".$row[3]."<br><br> Date of Birth: ".$row[4]."<br><br> Email Adress: ".$row[5]."<br><br> Home Adress: ".$row[6]."<br><br> Phone Number: ".$row[7];
                }
            }
            $conn->close();
        ?>
        <div style="padding-top: 2%;">
        <input type="submit" value="Generate Fake User" style="width: 150px; height: 35px; border-radius: 10px; background-color: navy; color: white; border-color: white;">
        </div>
        </div>
        </font>
    </div>
</body>
</html>