<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>iCare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="adminSignUp.css">
</head>
<body>

<div class="row">
    <div class="column side">
        <div class="card">
            <div class="header">
                <h1> <img src="logo.png" alt="Paris" width="50" height="50">iCare</h1>
                <h4>NEW ERA OF TREATMENT</h4>
            </div>
            <p></p>
            <p>Please fill the form with your right information, otherwise there is a possibility for getting banned after the verification</p>
            <p></p>
        </div>
    </div>
    <div class="column middle">
        <div class="topnav">
            <a href="index.php">Home</a>

        </div>
        <h2>Admin's signup form</h2>
        <!form start>
        <div >
            <form action="adminSignUp.php" method="post">
                <label for="name"><b>Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="name" name="name" placeholder="Name">
                <br>
                <label for="age"><b>Age&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="number" id="age" name="age" placeholder="Age">
                <br>
                <label for="gender"><b>Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <select id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
                <br>
                <label for="nid"><b>NID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="nid" name="nid" placeholder="nid">
                <br>
                <label for="email"><b>E-mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="email" name="email" placeholder="email">
                <br>
                <label for="address"><b>Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b></label>
                <input type="text" id="address" name="address" placeholder="address (In brief)">
                <br>
                <label for="pwd"><b>Password&nbsp&nbsp&nbsp&nbsp&nbsp</b> </label>
                <input type="password" id="pwd" name="pwd" placeholder="password">
                <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="submit" name="admin_reg_user" value="Submit">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="reset" value="Reset">
            </form>
        </div>

    </div>
</div>

</body>
</html>