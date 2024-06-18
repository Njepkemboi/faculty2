
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Evaluation Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  }
  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h2 {
    color: navy;
    margin-bottom: 20px;
  }
  .form-group {
    margin-bottom: 20px;
  }
  label {
    display: block;
    margin-bottom: 5px;
    color: navy;
  }
  select, input[type="text"], textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  button {
    padding: 10px 20px;
    background-color: navy;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  button:hover {
    background-color: purple;
  }
</style>
</head>
<body>

<div class="container">
  <h2>Evaluation Form</h2>
  <form id="feedbackForm"method="post" action="">
    <div class="form-group">
      <label for="course">Course Name:</label>
      <select id="course" name="course">
        <option value="" selected hidden> course name </option>
        <option value="course1">Course 1</option>
        <option value="course2">Course 2</option>
        <option value="course3">Course 3</option>
      </select>
    </div>
    <div class="form-group">
      <label for="courseCode">Course Code:</label>
      <select id="courseCode" name="courseCode">
      <option value="" selected hidden> Course code </option>
        <option value="code1">Code 1</option>
        <option value="code2">Code 2</option>
        <option value="code3">Code 3</option>
      </select>
    </div>
    <div class="form-group">
      <label for="faculty">Faculty Name:</label>
      <select id="faculty" name="faculty">
      <option value="" selected hidden> Faculty Name </option>
        <option value="faculty1">Faculty 1</option>
        <option value="faculty2">Faculty 2</option>
        <option value="faculty3">Faculty 3</option>
        <option value="faculty4">Faculty 4</option>
      </select>
    </div>
    <div class="form-group">
      <label for="q1">1. How satisfied are you with the course content?</label>
      <select id="q1" name="q1">
        <option value="very-satisfied">Very Satisfied</option>
        <option value="satisfied">Satisfied</option>
        <option value="neutral">Neutral</option>
        <option value="unsatisfied">Unsatisfied</option>
        <option value="very-unsatisfied">Very Unsatisfied</option>
      </select>
    </div>
    <div class="form-group">
      <label for="q2">2. Did the faculty explain the concepts clearly?</label>
      <select id="q2" name="q2">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
    <div class="form-group">
      <label for="q3">3. How engaging were the course materials?</label>
      <select id="q3" name="q3">
        <option value="very-engaging">Very Engaging</option>
        <option value="engaging">Engaging</option>
        <option value="neutral">Neutral</option>
        <option value="not-engaging">Not Engaging</option>
        <option value="very-not-engaging">Very Not Engaging</option>
      </select>
    </div>
    <div class="form-group">
      <label for="q4">4. What did you like most about the course?</label>
      <textarea id="q4" name="q4" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="q5">5. What suggestions do you have for improving the course?</label>
      <textarea id="q5" name="q5" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="q6">6. Any additional comments or feedback:</label>
      <textarea id="q6" name="q6" rows="3"></textarea>
    </div>
    <button type="submit">Submit Evaluation</button>

  </method=>
</div>

<div id="thankYouMessage" class="thank-you" style="display: none;">
    <p>Thank you for your feedback!</p>
  </div>



  
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



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

  // Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  // SQL statement to insert data into a table
  $stmt = $conn->prepare("INSERT INTO evaluation (test_name, course_code, faculty, q1, q2, q3, q4, q5, q6)
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
    echo "<script>alert('Feedback submitted successfully.');</script>";  } else {
    echo "Error: " . $stmt->error;
  }

  // Close statement
  $stmt->close();

  // Close connection
  $conn->close();
}
?>


  <script>
  document.getElementById("feedbackForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.text();
    })
    .then(data => {
      console.log(data); // Log the response from PHP (success message or error)
      document.getElementById("feedbackForm").reset(); // Reset the form after successful submission
      document.getElementById("formContainer").style.display = "none"; // Hide the form
      document.getElementById("thankYouMessage").style.display = "block"; // Show the thank you message
    })
    .catch(error => {
      console.error('Error:', error);
      alert("An error occurred, please try again later.");
    });
  });
</script>

</body>
</html>
