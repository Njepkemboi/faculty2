<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="adminindex.css">
  
  
</head>
<body>
  <div class="sidebar">
    <h1 style="color: aliceblue;">Admin Panel</h1>
    <a href="#Home">Dashboard</a>
  <a href="academicyear.html">Academic year</a>
  <a href="coursemanagement.html">Course Management</a>
  <a href="unitmanagement.html">Unit Management</a>
  <a href="evaluationcriterial.html">Evaluation criteria</a>
  <a href="questionsmanagement.html">Questions management</a>
  <div class="dropdown">
    <button class="dropbtn">Schools</button>
    <div class="dropdown-content">
      <a href="#Courses">Computing Science</a>
      <a href="#Courses">International Relations</a>
      <a href="#Courses">Business</a>
    </div>
  </div>
  <a href="deanmanagement.html">Dean management</a>
  <a href="facultymanagement.html">Faculty management</a>
  <a href="studentmanagement.html">Student management</a>
  <a href="#reports">Evaluation reports</a>
  <a href="#user">User Management</a>
  <?php echo " <h1>Welcome ". $_SESSION['username']."</h1>";?>
    <a href="../logout.php">Logout</a>
</div>

<div style="margin-left: 220px; padding: 20px;">
  <h2 id="Dashboard">Home</h2>


  <h2 id="Calender">Academic calender</h2>
  

  

  <div class="footer">
    <p>&copy; 2024 Faculty Evaluation. All rights reserved.</p>
</div>

</body>
<footer>


</footer>
</html>
