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

$email = $_SESSION['email'];
$link = mysqli_connect("localhost", "root", "", "icare");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$query = "SELECT * FROM patient where Email = '$email'";
$temp = mysqli_query($link, $query);
$table = mysqli_fetch_array($temp);
$patNid = $table['NID'];
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
    <a href="patientHomepage.php">Home</a>
    <a href="index.php?logout='1'">Logout</a>
</div>

<div id="main">
    <button class="openbtn" onclick="openNav()">☰</button>
</div>


<p align="top-right" style="color: greenyellow;padding:0px;
       font-size: 16px;
       color: black;
       text-align:center;
       position: absolute;
       top: 10px;
       right: 10px;"><b><i>A New Era of Treatment</i></b></p>


<div class="column middle">
    <div class="topnav" style="padding: 20px">

    </div>
    <div id="invoice-POS">

        <center id="top">
            <div class="info">
                <h1 style="color:darkslategray;">Prescription Query</h1>
                Date: <input type="text" id="demo"/>
            </div><!--End Info-->
        </center><!--End InvoiceTop-->

        <div id="mid">
            <form action="" method="post">
                <div class="cardInner">
                    <?php
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                    echo "<label><b>**Please copy your desired prescription id for furthur query</b> </label>";
                    // Attempt select query execution
                    $sql = "Select * From prescription,doctor d where Patient_Id='$patNid' And Doc_id = d.NID ";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<br><br><br>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<label><b>Doctor's Name :</b> </label>";
                                echo $row['Name'] . "<br>";
                                echo "<label><b>BMDC Reg. No :</b>  </label>";
                                echo $row['BMDC_RegNo'] . "<br>";
                                echo "<label><b>PostGrad deatails :</b>  </label>";
                                echo $row['PostGrad_deatails'] . "<br>";
                                echo "<label><b>Prescription ID :</b>  </label>";
                                echo $row['Prescription_id'] . "<br><br><br><br>";


                            }

                            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                            echo "<input type=submit style='width: 25%' formaction='PatientPrescriptionPage.php'   value=Prescription><br>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo "<br><br>";
                            echo "<label style='alignment: center'><b>No records matching your query were found.</b> </label>";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }



                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

                    echo "<input type=submit style='width: 25%' formaction='patientHomepage.php'   value=Go-Back>";
                    // Close connection
                    ?>

                </div>
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