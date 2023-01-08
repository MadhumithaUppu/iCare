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
$sql = "SELECT * FROM admin where Email = '$email'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
?>

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
        <h2>Admin's edit form</h2>
        <!form start>
        <div >
            <form action="adminSettings.php" method="post">
                <label for="name"><b>Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="name" name="name" value="<?php echo $row['Name'] ?>">
                <br>
                <label for="age"><b>Age&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="age" name="age" value="<?php echo $row['Age'] ?>">
                <br>
                <label for="nid"><b>NID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="nid" name="nid" value="<?php echo $row['NID']?>" readonly>
                <br>
                <label for="email"><b>E-mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="email" name="email" value="<?php echo $row['Email'] ?>">
                <br>
                <label for="address"><b>Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b></label>
                <input type="text" id="address" name="address" value="<?php echo $row['Address'] ?>">
                <br>
                <label for="pwd"><b>Password&nbsp&nbsp&nbsp&nbsp&nbsp</b> </label>
                <input type="password" id="pwd" name="pwd" placeholder="password" ">
                <label for="Notice">**You must fill this field</label>
                <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="submit" name="admin_Setting" value="Save Changes">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="submit" formaction="adminHomepage.php" value="Go Back">
            </form>
        </div>

    </div>
</div>

</body>
</html>