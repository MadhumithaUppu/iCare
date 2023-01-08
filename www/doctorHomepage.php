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
    <title>iDoc</title>
    <link rel="stylesheet" href="doctorHomepage.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
		input[type=submit] {
			width: 90%;
			background-color: #4CAF50;
			color: white;
			padding: 22px 22px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 143%;
		}
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }


        .header {
            background-color: transparent;
            padding: 20px;
            text-align: center;
        }


        .topnav {
            overflow: hidden;
            background-color: #45a049;
            padding: 0px;
        }



        .column {
            float: left;
            padding: 10px;
        }


        .column.side {
            width: 25%;
        }


        .column.middle {
            width: 50%;
        }


        .row:after {
            content: "";
            display: table;
            clear: both;
        }


        @media screen and (max-width: 600px) {
            .column.side, .column.middle {
                width: 100%;
            }
        }
    </style>
</head>
<body>



<div class="topnav">
     <a href="index.php?logout='1'" >logout</a>
</div>

<div class="row">
    <div class="column side">
        <div class="container">
        <img src="iDoc.png" alt="people" width="350" height="350">
            <div class="bottom-left">iDoc</div>
        </div>
    </div>
    <div class="column middle">
        <div id="Cen">
        <form>
            <h1>E-Prescription For :</h1>

            <input type="submit" name="DocNewPatient" id="DocNewPatient"   value="New Patient" formaction="docNewPatient.php"> <br>

            <br> <input type="submit" formaction="DocExistingPage.php"  value="Add Existing Patient"><br>
			<br><input type="submit" formaction="DocExistingPageRemove.php"  value="Remove Existing Patient"><br><br><br>
			

            <br> <input type="submit" formaction="DocPatientList.php"  value="Patients' List"><br>
			<br> <input type="submit" formaction="DocPatientListLocation.php"  value="Patients' List by Location"><br>

            <br> <input type="submit" formaction="doctorSettings.php" value="Settings">
            </form>
        </div>

    </div>
    <div class="column side">
        <div class="card">
              <h1 style="font-size:125%;">Make work better</h1>
            <p style="font-size:115%;">Now reach your patients faster.</p>

            <br><br><br>

        </div>
    </div>
</div>

</body>
</html>
