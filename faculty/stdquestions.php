
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
  <form id="feedbackForm" action="stdquestions.php" method="POST">
    <div class="form-group">
      <label for="course_name">Course Name:</label>
      <select id="course_name" name="course_name">
        <option value="" selected hidden> course name </option>
        <option value="course1">Course 1</option>
        <option value="course2">Course 2</option>
        <option value="course3">Course 3</option>
      </select>
    </div>
    <div class="form-group">
      <label for="course_code">Course Code:</label>
      <select id="course_code" name="course_code">
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
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate and sanitize input data (ensure all variables are initialized)
    $course_name = isset($_POST['course_name']) ? $_POST['course_name'] : '';
    $course_code = isset($_POST['course_code']) ? $_POST['course_code'] : '';
    $faculty = isset($_POST['faculty']) ? $_POST['faculty'] : '';
    $q1 = isset($_POST['q1']) ? $_POST['q1'] : '';
    $q2 = isset($_POST['q2']) ? $_POST['q2'] : '';
    $q3 = isset($_POST['q3']) ? $_POST['q3'] : '';
    $q4 = isset($_POST['q4']) ? $_POST['q4'] : '';
    $q5 = isset($_POST['q5']) ? $_POST['q5'] : '';
    $q6 = isset($_POST['q6']) ? $_POST['q6'] : '';

    // Proceed only if required fields are not empty
    if (!empty($course_name) && !empty($course_code)) {

        // Database connection details
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

        // Prepare SQL statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO evaluation (course_name, course_code, faculty, q1, q2, q3, q4, q5, q6)
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }

        // Bind parameters
        $stmt->bind_param("sssssssss", $course_name, $course_code, $faculty, $q1, $q2, $q3, $q4, $q5, $q6);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Feedback submitted successfully.";
        } else {
            echo "Error executing statement: " . $stmt->error;
        }

        // Close statement
        $stmt->close();

        // Close connection
        $conn->close();
    } else {
        echo "Course name and course code are required fields.";
    }
}
?>

   

</body>
</html>