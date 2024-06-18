
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Database connection 
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $dbname = "facultyevaluation"; 

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // SQL statement to insert data into a table
  $stmt = $conn->prepare("INSERT INTO feedback (course_name, course_code, faculty, q1, q2, q3, q4, q5, q6)
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

  // Bind parameters
  $stmt->bind_param("sssssssss", $course_name, $course_code, $faculty, $q1, $q2, $q3, $q4, $q5, $q6);

  // Set parameters from form data
  $course_name = $_POST['course_name']; // Replace 'courseName' with the actual 'name' attribute of your course name select element
  $course_code = $_POST['course_code']; // Replace 'courseCode' with the actual 'name' attribute of your course code select element
  $faculty = $_POST['faculty']; // Replace 'faculty' with the actual 'name' attribute of your faculty select element
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];

  // Execute the statement
  if ($stmt->execute()) {
    echo "Feedback submitted successfully.";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close statement
  $stmt->close();

  // Close connection
  $conn->close();
}
?>

