<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Users</title>
</head>
<body style="background-color: navy;">
    <form method="post" action="server.php">
        <div style="font-family: Arial, Helvetica, sans-serif; margin-left: 25%; margin-top: 5%; padding-bottom: 2%; display: flex; justify-content: center; flex-direction: column; text-align: center; 
                    border: clear; border-radius: 20px; background-color: white; width: 50%;">
            <div>
                <h1>Create new fake user</h1>
                <h3>Please enter details below</h3>
            </div>
                <div>
                    <h4>First Name</h4>
                    <input type=text placeholder="Enter first name" name="fname" style="height: 40px; font-size: 15px;">
                </div>
                    <div>
                        <h4>Last Name</h4>
                        <input type="text" placeholder="Enter last name" name="lname" style="height: 40px; font-size: 15px;">
                    </div>
                        <div>
                            <h4>Gender</h4>
                            <input type="radio" name="gender" value="Male"><span>Male</span>
                            <input type="radio" name="gender" value="Female"><span>Female</span>
                            <input type="radio" name="gender" value="Other"><span>Other</span>
                        </div>
                        <div>
                            <h4>Email Adress</h4>
                            <input type="text" placeholder="example@email.com" name="eadress" style="height: 40px; font-size: 15px;">
                        </div>
                        <div>
                            <h4>Home Adress</h4>
                            <input type="text" placeholder="12 Adress Rd" name="hadress" style="height: 40px; font-size: 15px;">
                        </div>
                        <div>
                            <h4>Phone Number</h4>
                            <input type="text" placeholder="(04)12345678" name="pnumber" style="height: 40px; font-size: 15px;">
                        </div>
                        <div>
                        <h4>Age</h4>
                        <select name="age" style="width: 20%; border-radius: 10px; font-size: 20px;">
                        <?php
                        for($a = 1; $a <= 100; $a += 1){
                        echo("<option value='{$a}'>{$a}</option>");
                        }
                        ?>
                        </select>
                    </div>
            <div style="padding-top: 10px;">
            <input type="submit" value="Create" style="width: 115px; height: 35px; border-radius: 10px; background-color: navy; color: white; border-color: white;">
            </div>
        </div>
    </form>
</body>
</html>