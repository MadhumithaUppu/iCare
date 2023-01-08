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
//kinda global variable type
$nid = $_SESSION['NID'];
$name = $_SESSION['Name'];
$age = $_SESSION['Age'];
$gender = $_SESSION['Gender'];

//for Doctor's name
$email = $_SESSION['email'];
$link = mysqli_connect("localhost", "root", "", "icare");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT * FROM doctor where Email = '$email'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
$prescriptionId = $_SESSION['prescriptionId'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>iCare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="E-Prescription.css">
</head>
<body onload="myFunction()">
<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="doctorHomepage.php">Home</a>
    <a href="index.php"><b>Logout</b></a>
</div>

<div id="main">
    <button class="openbtn" onclick="openNav()">☰
        <?php
        echo "Dr. " . $row['Name'];
        ?>
    </button>
    <label for="examination"><b>
            <?php
            echo "&nbsp&nbsp&nbsp&nbsp". $row['PostGrad_deatails'] ."&nbsp&nbsp|&nbsp&nbspBMDC REG NO :" . $row['BMDC_RegNo'] ;
            ?>
        </b></label>
</div>


<p align="top-right" style="color: greenyellow;padding:0px;
       font-size: 16px;
       color: black;
       text-align:center;
       position: absolute;
       top: 10px;
       right: 10px;"><b><i>A New Era of Treatment</i></b></p>


<div class="column middle">
    <div class="topnav">
        <p style="float: left;
    position: relative; font-size: 16px">&nbsp&nbsp&nbsp&nbsp Patient Name: </p>
        <p style="float: left;
    position: relative; font-size: 16px">
            &nbsp&nbsp&nbsp&nbsp
            <?php
            echo $name;
            ?>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </p>

        <p style="float: left;
    position: relative; font-size: 16px"> Age: </p>
        <p style="float: left;
    position: relative; font-size: 16px">
            &nbsp&nbsp&nbsp&nbsp
            <?php
            echo $age;
            ?>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </p>

        <p style="float: left;
    position: relative; font-size: 16px">&nbsp&nbsp&nbsp&nbsp Gender: </p>
        <p style="float: left;
    position: relative; font-size: 16px">
            &nbsp&nbsp&nbsp&nbsp
            <?php
            echo $gender;
            ?>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </p>

        <p style="float: left;
    position: relative; font-size: 16px">&nbsp&nbsp&nbsp&nbsp NID: </p>
        <p style="float: left;
    position: relative; font-size: 16px">
            &nbsp&nbsp&nbsp&nbsp
            <?php
            echo $nid;
            ?>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </p>


    </div>
    <div id="invoice-POS">

        <center id="top">
            <div class="info">
                <h1 style="color:darkslategray;">Prescription</h1>
                Date: <input type="text" id="demo"/>
            </div><!--End Info-->
        </center><!--End InvoiceTop-->

        <div id="mid">
            <form action="" method="post">
                <label for="complaints"><b>Chief Complaints:&nbsp&nbsp</b></label><br>
                <?php
                $sql = "SELECT complaint FROM prescriptioncomplaint where Prescription_Id = '$prescriptionId' ";

                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<ul>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<li>' . $row['complaint'] . '</li>';
                        }
                        echo "</ul>";
                        mysqli_free_result($result);
                    }
                }
                ?>

                <label for="examination"><b>On Examination:&nbsp&nbsp</b></label><br>
                <?php
                $sql = "SELECT Examination_type,Measurement FROM prescriptionexamination where Prescription_Id = '$prescriptionId' ";

                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table style='border: 1px solid black; border-collapse: collapse'; width:100%;><tr><th><u>Experiment Type</u></th><th><u>Measurement</u></th></tr>";
                        echo "<br>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr><th>" . $row['Examination_type'] . "</th><th>" . $row['Measurement'] . "</th> </tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        mysqli_free_result($result);
                    }
                }
                ?>
                <label for="checkup"><b>Body-Checkup need to be done(tests):&nbsp&nbsp</b></label><br>
                <?php
                $sql = "SELECT Tests FROM prescriptiontests where Prescription_Id = '$prescriptionId' ";

                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<ul>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<li>' . $row['Tests'] . '</li>';
                        }
                        echo "</ul><br>";
                        mysqli_free_result($result);
                    }
                }
                ?>

                <label for="medicine"><b>Medicine:&nbsp&nbsp</b></label><br>
                <?php
                $sql = "SELECT Medicine,Timing,Duration FROM prescriptionmedicine where Prescription_Id = '$prescriptionId' ";

                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table style='border: 1px solid black; border-collapse: collapse'; width:100%;>
<tr><th><u>Medicine</u></th><th><u>Timing</u></th><th><u>Duration</u></th></tr>";
                        echo "<br>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr><th>" . $row['Medicine'] . "</th><th>" . $row['Timing'] . "</th><th>" . $row['Duration'] . "</th></tr>";
                        }
                        echo "</table>";
                        echo "<br><br>";
                        mysqli_free_result($result);
                    }
                }
                ?>

                <label for="Suggestion"><b>Suggestion :&nbsp&nbsp</b></label><br>
                <?php
                $sql = "SELECT Suggestion FROM prescriptionsuggestion where Prescription_Id = '$prescriptionId' ";

                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<ul>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<li>' . $row['Suggestion'] . '</li>';
                        }
                        echo "</ul><br>";
                        mysqli_free_result($result);
                    }
                }
                ?>

            </form>
        </div><!--End Invoice-->

    </div>

    <!JS part>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>

    <script>
        function myFunction() {
            document.getElementById('demo').value = Date();
        }
    </script>
</body>
</html>