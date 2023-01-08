<?php
include('server.php');

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: index.php");
}

//For getting existing information
$email = $_SESSION['email'];
$link = mysqli_connect("localhost", "root", "", "icare");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt select query execution
$sql = "SELECT * FROM doctor where Email = '$email'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>iCare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="doctorSignUp.css">
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
            <a href="doctorHomepage.php">Home</a>

        </div>
        <h2>Doctor's edit form</h2>
        <!form start>
        <div >
            <form action="doctorSignUp.php" method="post">
                <label for="name"><b>Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="name" name="name" value="<?php echo $row['Name'] ?>">
                <br>
                <label for="age"><b>Age&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="number" id="age" name="age" value="<?php echo $row['Age'] ?>">
                <br>
                <label for="nid"><b>NID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="nid" name="nid" value="<?php echo $row['NID'] ?>" readonly>
                <br>
                <label for="email"><b>E-mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="email" name="email" value="<?php echo $row['Email'] ?>">
                <br>
                <label for="address"><b>Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b></label>
                <input type="text" id="address" name="address" value="<?php echo $row['Address'] ?>">


                <h2>Educational Qualification</h2>
                <label for="ssc"><b>SSC&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="textGrade" id="ssc" name="ssc" value="<?php echo $row['SSC_GPA'] ?>">
                <label for="sscSession"><b>&nbsp&nbsp&nbspSession&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="textGrade" id="sscSession" name="sscSession" value="<?php echo $row['SSC_Session'] ?>">
                <br>
                <label for="sscinst"><b>Institution&nbsp&nbsp&nbsp</b></label>
                <input type="text"  id="sscinst" name="sscinst" value="<?php echo $row['SSC_inst'] ?>">
                <br>
                <label for="hsc"><b>HSC&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="textGrade" id="hsc" name="hsc" value="<?php echo $row['HSC_GPA'] ?>">
                <label for="hscSession"><b>&nbsp&nbsp&nbspSession&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="textGrade" id="hscSession" name="hscSession" value="<?php echo $row['SSC_Session'] ?>">
                <br>
                <label for="hscinst"><b>Institution&nbsp&nbsp&nbsp</b></label>
                <input type="text"  id="hscinst" name="hscinst" value="<?php echo $row['SSC_inst'] ?>">
                <br>
                <label for="bmdc"><b>BMDC registration number</b></label><br>
                <input type="text" id="bmdc" name="bmdc" value="<?php echo $row['BMDC_RegNo'] ?>">
                <br>
                <label for="mbbs"><b>MBBS Session </b></label><br>
                <input type="textGrade" id="mbbs" name="mbbs" value="<?php echo $row['MBBS_Session'] ?>"><br>
                <label for="mbbsInst"><b>Institution&nbsp&nbsp&nbsp</b></label>
                <input type="text"  id="mbbsInst" name="mbbsInst" value="<?php echo $row['MBBS_inst'] ?>">
                <br>
                <label for="postGrad"><b>Post Graduation Details (Please give all the information with details if applicable)</b></label><br><br>
                <input type="text" id="postGrad" name="postGrad" style="width:58%; height:150px;" value="<?php echo $row['PostGrad_deatails'] ?>"  >
                <br>
                <label for="pwd"><b>Password&nbsp&nbsp&nbsp&nbsp&nbsp</b> </label>
                <input type="password" id="pwd" name="pwd" placeholder="password">
                <label for="Notice">**You must fill this field</label>
                <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="submit" name="doctor_setting" value="Save Changes">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="submit" formaction="doctorHomepage.php" value="Go Back">
            </form>
        </div>

    </div>
</div>

</body>
</html>