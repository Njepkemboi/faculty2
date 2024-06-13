<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-image: url('trial.png');
        background-size: cover; 
        background-position: center;
        background-repeat: no-repeat;
    }  
    .content {
        max-width: 50%;
        max-height: 30%;
        margin: 50px auto;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
    }
    
    .sidebar {
        height: 100%;
        width: 200px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #110533;
        padding-top: 20px;
    }
    
    .sidebar a {
        padding: 10px;
        text-decoration: none;
        color: white;
        display: block;
        transition: 0.3s;
    }
    
    .sidebar a:hover {
        background-color: #a882b9;
        color:black;
    }
    
    .content {
        margin-left: 200px;
        padding: 20px;
    }
</style>
</head>
<body>

<div class="sidebar">
    <a href="stdhome.html"> Home </a>
    <a href="stdprofile.html"> Profile </a>
    <a href="stdschool.html"> School </a>
    <a href="stdquestions.html"> Questions </a>
    <a href="stdevaluation.html"> Evaluation </a>
    <?php echo " <h1>Welcome ". $_SESSION['username']."</h1>";?>
    <a href="../logout.php">Logout</a>
</div>

<div class="content">
    <h2>Faculty Evaluation System</h2>
    <p>We are pleased to welcome you here and trust that you'll discover our platform to be both captivating and educational. We encourage you to share your perspectives regarding our faculty members. Commend them for their commendable efforts and pinpoint areas where they can improve to ensure the delivery of high-quality education.

        <br>Rest assured, your privacy is of utmost importance to us. Your identity will remain confidential and will not be disclosed to the faculty members you evaluate. However, it's important to note that while your feedback is not anonymous, it may necessitate further discussion with the dean. Therefore, your identity will be known solely to the dean.
        
        <br>Thank you for taking the time to explore our Faculty Evaluation Platform. Your participation is invaluable to us.</p>

</div>

</body>
</html>
