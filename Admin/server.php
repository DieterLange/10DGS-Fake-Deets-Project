<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body style="background-color: navy;"> 
    <div style="font-family: Arial, Helvetica, sans-serif; margin-left: 38%; margin-top: 15%; padding-bottom: 1%; padding-top: 1%; display: flex; justify-content: center; flex-direction: column; text-align: center; 
                    border: clear; border-radius: 20px; background-color: white; width: 25%;">
        <?php
            $name = $_POST["fname"] ." ". $_POST["lname"];
            $email = $_POST["eadress"];
            $home = $_POST["hadress"];
            $phone = $_POST["pnumber"];
            $gender = $_POST["gender"];
            $dob = $_POST["dob"];
            $photo = $_POST["photo"];
        ?>
        
        <?php
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $eadress = $_POST["eadress"];
        $pnumber = $_POST["pnumber"];
        $hadress = $_POST["hadress"];
        $photo = $_POST["photo"];
        $sql = "INSERT INTO userinfo (fname, lname, gender, dob, eaddress, pnumber, haddress, photo) VALUES ('$fname', '$lname', '$gender', '$dob', '$eadress', '$pnumber','$hadress', '$photo')";

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "fake deets";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)   {
        die("Connection failed: " . $conn->connect_error);
        }

        

        if ($conn->query($sql) === TRUE) {
        echo "New user created successfuly!<br><br>
        Name: $name<br><br>
        Gender: $gender<br><br>
        Date of Birth: $dob<br><br>
        Email: $email<br><br>
        Phone Number: $phone<br><br>
        House Address: $home<br><br>
        Photo: $photo<br><br>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        ?>
    </div>
</body>
</html>