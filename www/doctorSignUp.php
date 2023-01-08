<?php include('server.php') ?>

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
            <p>Please fill the form with your right informaiton, otherwise there is a possibility for getting banned after the verification</p>
            <p></p>
        </div>
    </div>
    <div class="column middle">
        <div class="topnav">
            <a href="index.php">Home</a>
        </div>
        <h2>Doctor's signup form</h2>
        <!form start>
        <div >
            <form action="doctorSignUp.php" method="post">
                <label for="name"><b>Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="name" name="name" placeholder="Name">
                <br>
                <label for="age"><b>Age&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="number" id="age" name="age" placeholder="Age">
                <br>
                <label for="gender"><b>Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <select id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
                <br>
                <label for="nid"><b>NID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="nid" name="nid" placeholder="nid"><label>** Your NID is very important ,so fill this carefully!</label>
                <br>
                <label for="email"><b>E-mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="text" id="email" name="email" placeholder="email">
                <br>
                <label for="address"><b>Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b></label>
                <input type="text" id="address" name="address" placeholder="address (In brief)">


                <h2>Educational Qualification</h2>
                <label for="ssc"><b>SSC&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="textGrade" id="ssc" name="ssc" placeholder="GPA">
                <label for="sscSession"><b>&nbsp&nbsp&nbspSession&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="textGrade" id="sscSession" name="sscSession" placeholder="Session">
                <br>
                <label for="sscinst"><b>Institution&nbsp&nbsp&nbsp</b></label>
                <input type="text"  id="sscinst" name="sscinst" placeholder="Institution">
                <br>
                <label for="hsc"><b>HSC&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="textGrade" id="hsc" name="hsc" placeholder="GPA">
                <label for="hscSession"><b>&nbsp&nbsp&nbspSession&nbsp&nbsp&nbsp&nbsp</b></label>
                <input type="textGrade" id="hscSession" name="hscSession" placeholder="Session">
                <br>
                <label for="hscinst"><b>Institution&nbsp&nbsp&nbsp</b></label>
                <input type="text"  id="hscinst" name="hscinst" placeholder="Institution">
                <br>
                <label for="bmdc"><b>BMDC registration number</b></label><br>
                <input type="text" id="bmdc" name="bmdc" placeholder="Reg Number">
                <br>
                <label for="mbbs"><b>MBBS Session </b></label><br>
                <input type="textGrade" id="mbbs" name="mbbs" placeholder="Session"><br>
                <label for="mbbsInst"><b>Institution&nbsp&nbsp&nbsp</b></label>
                <input type="text"  id="mbbsInst" name="mbbsInst" placeholder="Institution">
                <br>
                <label for="postGrad"><b>Post Graduation Details (Please give all the information with details if applicable)</b></label><br><br>
                <input type="text" id="postGrad" name="postGrad" style="width:58%; height:150px;" ></input>
                <br>
                <label for="pwd"><b>Password&nbsp&nbsp&nbsp&nbsp&nbsp</b> </label>
                <input type="password" id="pwd" name="pwd" placeholder="password">
                <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="submit" name="doctor_reg_user" value="Submit">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="reset" value="Reset">
            </form>
        </div>

    </div>
</div>

</body>
</html>