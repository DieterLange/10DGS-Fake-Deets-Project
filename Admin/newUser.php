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
    <title>New User</title>
</head>
<body style="background-color: white; font-color: #000">
    <form method="post" action="server.php">
        <div style="font-family: Arial; font-size: 15px; font-weight: 400; display: flex; flex-direction: row; justify-content: center; align-items: center; height: 44px; background-color: #2B547E;">
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/newUser.php" style="text-decoration: none; margin-left: 70px; margin-right: 70px"><font color="#FFD700">Add New User</font></a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/users.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Users</font></a>
            <a href="http://localhost/10DGS-Fake-Deets-Project/Admin/admin.php" style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Admin</font></a>
            <a href=http://localhost/10DGS-Fake-Deets-Project/Database/logout.php style="text-decoration: none; margin-right: 70px;"><font color="#fafaf">Logout</font></a>
        </div>
        <div style="font-family: Arial, Helvetica, sans-serif; font-color: black; margin-left: 25%; margin-top: 5%; padding-bottom: 2%; display: flex; justify-content: center; flex-direction: column; text-align: center; 
                    border: clear; border-radius: 20px; background-color: #D3D3D3; width: 50%;">
            <div>
                <h1>Create new fake user</h1>
                <h3>Please enter details below</h3>
            </div>
                <div>
                    <h4>First Name</h4>
                    <input required type=text placeholder="Enter first name" name="fname" style="height: 40px; font-size: 15px;">
                </div>
                    <div>
                        <h4>Last Name</h4>
                        <input required type="text" placeholder="Enter last name" name="lname" style="height: 40px; font-size: 15px;">
                    </div>
                        <div>
                            <h4>Gender</h4>
                            <input required type="radio" name="gender" value="Male"><span>Male</span>
                            <input required type="radio" name="gender" value="Female"><span>Female</span>
                            <input required type="radio" name="gender" value="Other"><span>Other</span>
                        </div>
                        <div>
                            <h4>Date of Birth</h4>
                            <input required type="date" placeholder="DD/MM/YYYY" name="dob" style="width: 175px; font-size: 15px;">
                        </div>
                        <div>
                            <h4>Email Adress</h4>
                            <input required type="text" placeholder="example@email.com" name="eadress" style="height: 40px; font-size: 15px;">
                        </div>
                        <div>
                            <h4>Home Adress</h4>
                            <input required type="text" placeholder="12 Adress Rd" name="hadress" style="height: 40px; font-size: 15px;">
                        </div>
                        <div>
                            <h4>Phone Number</h4>
                            <input required type="text" placeholder="(04)12345678" name="pnumber" style="height: 40px; font-size: 15px;">
                        </div>
                        <div>
                            <h4>Photo</h4>
                            <input required type="text" placeholder="Insert File Path" name="photo" style="height: 40px; font-size: 15px;">
                        </div>
                        
            <div style="padding-top: 10px;">
            <input type="submit" value="Create" style="width: 115px; height: 35px; border-radius: 10px; background-color: navy; color: white; border-color: white;">
            </div>
        </div>
    </form>
</body>
</html>