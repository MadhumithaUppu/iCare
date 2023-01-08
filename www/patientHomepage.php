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
    <title>iPatient</title>
    <link rel="stylesheet" href="patientHomepage.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    </style>
</head>
<body>


<div class="topnav">
    <a href="index.php?logout='1'">logout</a>
</div>

<div class="row">
    <div class="column side">
        <div class="container">
            <img src="iPatient.png" alt="people" width="350" height="350" style="margin-left: 20%">
            <div class="bottom-left">iPatient</div>
        </div>
    </div>
    <div class="column middle">
        <div id="Cen">
            <form>
                <h1>Menu</h1>
                <input type="submit" formaction="PatientPrescriptionQuery.php" value="Prescription Query"> <br><br>
                <input type="submit" formaction="PatientPrescriptionPage.php" value="Prescription"> <br><br>
                <input type="submit" formaction="patientDoctorList.php" value="Doctor's List">
                <br><br>
                <input type="submit" formaction="patientSettings.php" value="Settings"><br>

            </form>
        </div>

    </div>
    <div class="column side">
        <div class="card">
            <h1 style="font-size:125%;">Your system of choice</h1>
            <p style="font-size:115%;">Transforming and growing with you.</p>

            <br><br><br>

        </div>
    </div>
</div>


</body>
</html>
