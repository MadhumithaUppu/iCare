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
                <h1 style="color:darkslategray;">Prescription Page</h1>
                Date: <input type="text" id="demo"/>
            </div><!--End Info-->
        </center><!--End InvoiceTop-->

        <div id="mid">
            <form action="" method="post">
                <div class="cardInner">


                    <label>Prescription ID &nbsp&nbsp</label>
                    <input type="text" name="prescriptionId" id="prescriptionId" placeholder="Prescription Id">
                    <input type="submit" name="prescriptionSearch" id="prescriptionSearch" value="Submit">
                    <?php
                    // Check connection
                    $link = mysqli_connect("localhost", "root", "", "icare");
                    if (isset($_POST['prescriptionSearch'])) {
                        $prescriptionId = mysqli_real_escape_string($link, $_REQUEST['prescriptionId']);
                        if ($link === false) {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        $sql = "Select * From prescription where Prescription_id = '$prescriptionId' ";
                        if ($result = mysqli_query($link, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                echo "<br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "<label style='font-size: 20px'><b>Found!!</b></label><br><br> ";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "<input type='submit' style='width: 20%' name='generatePrescription' id='generatePrescription' formaction='generatePrescription.php' value='E-Prescription'>";

                                //variables for prescription
                                $table1 = "SELECT d.Name DocName,d.PostGrad_deatails DocPd,d.BMDC_RegNo BMDC,p.Name Pname,p.Age PatAge ,p.Gender Pgender,p.NID Pnid 
from prescription,doctor d,patient p 
where Prescription_id = '$prescriptionId' and d.NID = Doc_id and p.NID = Patient_Id";

                                $temp = mysqli_query($link, $table1);
                                $rw = mysqli_fetch_array($temp);

                                $_SESSION['DocName'] = $rw['DocName'];
                                $_SESSION['DocPd'] = $rw['DocPd'];
                                $_SESSION['BMDC'] = $rw['BMDC'];
                                $_SESSION['Pname'] = $rw['Pname'];
                                $_SESSION['PatAge'] = $rw['PatAge'];
                                $_SESSION['Pgender'] = $rw['Pgender'];
                                $_SESSION['Pnid'] = $rw['Pnid'];
                                $_SESSION['prescriptionId'] = $prescriptionId;


                            } else {
                                echo "<br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                echo "<label style='font-size: 20px'><b>Not Found!!</b></label><br><br> ";
                            }
                        }
                    }
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