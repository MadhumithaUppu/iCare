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
//for Doctor's name
$email = $_SESSION['email'];
$link = mysqli_connect("localhost:3307", "root", "", "group7_007_icaredb");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM doctor where Email = '$email'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
$docNID = $row['NID'];

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
                <h1 style="color:darkslategray;">List of patients by Location</h1>
                Date: <input type="text" id="demo"/>
            </div><!--End Info-->
        </center><!--End InvoiceTop-->

        <div id="mid">
            <form action="" method="post">
                <div class="cardInner">


                    
					<label>Enter the Location &nbsp&nbsp</label>
                    <input type="text" name="patientNID" id="patientNID" placeholder="Location/Part of address">
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
                        $sql = "SELECT NID,Name,Age,Gender FROM patient where lower(address) like '$nid'";


                        if ($result = mysqli_query($link, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                echo "<br><br><br>";
								echo "List of patients in $nid";
								echo "<br><br>";
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<label><b>NID :</b> </label>";
                                    echo $row['NID'] . "<br>";
                                    echo "<label><b>Name : </b> </label>";
                                    echo $row['Name'] . "<br>";
                                    echo "<label><b>Age :</b>  </label>";
                                    echo $row['Age'] . "<br>";
                                    echo "<label><b>Gender :</b>  </label>";
                                    echo $row['Gender'] . "<br>";
                                    echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

                                    //to access these from different page
                                    $_SESSION['NID'] = $row['NID'];
                                    $_SESSION['Name'] = $row['Name'];
                                    $_SESSION['Age'] = $row['Age'];
                                    $_SESSION['Gender'] = $row['Gender'];

                                    echo "<input type=submit style='width: 25%' formaction='E-Prescription.php'    value=E-Prescription>";
                                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                                    echo "<input type=submit style='width: 25%' formaction='doctorHomepage.php'   value=Go-Back>";
                                }

                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                echo "<br><br>";
                                echo "<label style='alignment: center'><b>No records matching your query were found.</b> </label>";
                            }
                        } else {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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