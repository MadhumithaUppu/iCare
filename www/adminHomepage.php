<?php
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>iAdmin</title>
    <link rel="stylesheet" href="adminHomepage.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


<div class="topnav">
    <a href="index.php?logout='1'">logout</a>
</div>

<div class="row">
    <div class="column side">
        <div class="container">
            <img class="image1" src="iAdmin.png" alt="people" width="450" height="500" style="margin-top: -20px">

            <div class="bottom-left">Administration</div>
        </div>
    </div>
    <div class="column middle">
        <form>
            <div id="Cen">

                <h1>Menu</h1>
                <input type="submit" formaction="adminDoctorList.php" value="Doctors' List"> <br>
                <br> <input type="submit" formaction="adminPatientList.php" value="Patients' List"><br>
                <br><br><br><br>
                <br> <input type="submit" formaction= "adminSettings.php" value="Settings">

            </div>
        </form>
    </div>
    <div class="column side">
        <form>
            <div id="Cen2">
                <h2 style="margin-top: 30px">Expand the team:</h2><br>

                <input type="submit" name="admin_creator" formaction="adminSignUp.php" style="width: 80%"
                       value="Admin Creator">

            </div>
        </form>
    </div>
</div>

</body>
</html>
