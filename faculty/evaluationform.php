<?php
include("evaluationconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Evaluation Form</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: navy;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .form-group {
            margin: 20px 0;
        }
        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group select {
            background-color: #fff;
        }
        .form-group textarea {
            height: 100px;
            resize: vertical;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: purple;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #5e008e;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Faculty Evaluation Form</h2>
    </div>
    <form action="submit_evaluation.php" method="POST" class="evaluation-form">
        <div class="form-group">
            <label for="question1">1. How effectively does the faculty member explain course material and concepts?</label>
            <select id="question1" name="question1" required>
                <option value="">Select</option>
                <option value="Very Ineffective">Very Ineffective</option>
                <option value="Ineffective">Ineffective</option>
                <option value="Neutral">Neutral</option>
                <option value="Effective">Effective</option>
                <option value="Very Effective">Very Effective</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="question2">2. How approachable is the faculty member for discussing course-related questions and concerns?</label>
            <select id="question2" name="question2" required>
                <option value="">Select</option>
                <option value="Not Approachable">Not Approachable</option>
                <option value="Somewhat Approachable">Somewhat Approachable</option>
                <option value="Neutral">Neutral</option>
                <option value="Approachable">Approachable</option>
                <option value="Very Approachable">Very Approachable</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="question3">3. How well-organized and structured are the faculty member’s lectures and course materials?</label>
            <select id="question3" name="question3" required>
                <option value="">Select</option>
                <option value="Very Poorly Organized">Very Poorly Organized</option>
                <option value="Poorly Organized">Poorly Organized</option>
                <option value="Neutral">Neutral</option>
                <option value="Well Organized">Well Organized</option>
                <option value="Very Well Organized">Very Well Organized</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="question4">4. How timely and constructive is the feedback provided by the faculty member on assignments and exams?</label>
            <select id="question4" name="question4" required>
                <option value="">Select</option>
                <option value="Very Untimely and Unconstructive">Very Untimely and Unconstructive</option>
                <option value="Untimely and Unconstructive">Untimely and Unconstructive</option>
                <option value="Neutral">Neutral</option>
                <option value="Timely and Constructive">Timely and Constructive</option>
                <option value="Very Timely and Constructive">Very Timely and Constructive</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="question5">5. How conducive is the learning environment created by the faculty member to your overall learning and engagement?</label>
            <select id="question5" name="question5" required>
                <option value="">Select</option>
                <option value="Not Conducive at All">Not Conducive at All</option>
                <option value="Slightly Conducive">Slightly Conducive</option>
                <option value="Neutral">Neutral</option
                    <option value="Conducive">Conducive</option>
                    <option value="Very Conducive">Very Conducive</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="comments">6. What do you believe are the strengths of this faculty member's teaching? What areas could use improvement?</label>
                <textarea id="comments" name="comments" placeholder="Your comments here..."></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn">Submit Evaluation</button>
            </div>
        </form>
    </div>
    
    </body>
    </html>
    