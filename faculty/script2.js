// Define an array of questions with their respective choices
const questions = [
    {
        question: "What is the capital of France?",
        choices: ["London", "Paris", "Berlin", "Rome"],
        correctAnswer: "Paris"
    },
    {
        question: "Which planet is known as the Red Planet?",
        choices: ["Mars", "Venus", "Jupiter", "Saturn"],
        correctAnswer: "Mars"
    },
    {
        question: "What is the chemical symbol for water?",
        choices: ["H2O", "CO2", "NaCl", "O2"],
        correctAnswer: "H2O"
    },
    {
        question: "Who wrote 'Romeo and Juliet'?",
        choices: ["William Shakespeare", "Jane Austen", "Charles Dickens", "Leo Tolstoy"],
        correctAnswer: "William Shakespeare"
    },
    {
        question: "What is the tallest mammal in the world?",
        choices: ["Elephant", "Giraffe", "Horse", "Kangaroo"],
        correctAnswer: "Giraffe"
    }
];

// Function to display questions and choices
function displayQuestions() {
    const quizContainer = document.getElementById("quiz-container");

    // Loop through each question
    questions.forEach((questionObj, index) => {
        const questionElement = document.createElement("div");
        questionElement.classList.add("question");
        questionElement.innerHTML = `<h3>Question ${index + 1}: ${questionObj.question}</h3>`;

        // Loop through choices for each question
        questionObj.choices.forEach(choice => {
            const choiceElement = document.createElement("div");
            choiceElement.classList.add("choice");
            choiceElement.innerHTML = `<input type="radio" name="question${index}" value="${choice}"> ${choice}`;
            questionElement.appendChild(choiceElement);
        });

        quizContainer.appendChild(questionElement);
    });
}

// Call the function to display questions
displayQuestions();
