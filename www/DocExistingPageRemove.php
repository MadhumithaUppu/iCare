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
    <a href="doctorHomepage.php">Home</a>
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
                <h1 style="color:darkslategray;">Enter the NID's of patient whose records need to be deleted</h1>
                Date: <input type="text" id="demo"/>
            </div><!--End Info-->
        </center><!--End InvoiceTop-->

        <div id="mid">
            <form action="" method="post">
                <div class="cardInner">


                    <label>Remove with Patient's NID &nbsp&nbsp</label>
                    <input type="text" name="patientNID" id="patientNID" placeholder="NID">
                    <input type="submit" name="patientSearch" id="patientSearch" value="Submit">
                    <?php
                    // Check connection
                    $link = mysqli_connect("localhost:3307", "root", "", "group7_007_icaredb");
                    if (isset($_POST['patientSearch'])) {
                        $nid = mysqli_real_escape_string($link, $_REQUEST['patientNID']);
                        if ($link === false) {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
// Attempt select query execution
                        $sql = "DELETE FROM patient WHERE NID = '$nid'";


                        if ($result = mysqli_query($link, $sql)) {
                            if ($result= True) {
                                

                                    echo "Success";
                                }

                                // Free result set
                               # mysqli_free_result($result);
                            } else {
                                echo "<br><br>";
                                echo "<label style='alignment: center'><b>No records matching your query were found.</b> </label>";
                            }
                        } 
                    

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