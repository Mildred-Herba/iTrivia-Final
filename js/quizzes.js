function startTheQuiz(){
    document.getElementById("quizCon").style.display = "block";
    document.getElementById("welcome").style.display = "none";
}

const questions = [
    {
        //no1
        question: "What is the primary function of the CPU in a computer system?",
        answers: [
            {text: "Storing data", correct: false},
            {text: "Transmitting data", correct: false},
            {text: "Proccessing data", correct: true},
            {text: "Displaying data", correct: false},
        ]
    },

    {
        //no2
        question: "What does the acronym RAM stand for in the context of computer memory?",
        answers: [
            {text: "Remote Access Module", correct: false},
            {text: "Redundant Array of Memory", correct: false},
            {text: "Random Access Memory", correct: true},
            {text: "Read-Only Memory", correct: false},
        ]
    },

    {
        //no3
        question: "Which of the following is a high-level programming language often used for web development?",
        answers: [
            {text: "Assembly", correct: false},
            {text: "Python", correct: true},
            {text: "Machine Learning", correct: false},
            {text: "Binary Code", correct: false},
        ]
    },

    {
        //no4
        question: "What is the purpose of an operating system in a computer?",
        answers: [
            {text: "Managing hardware resources", correct: true},
            {text: "Performing calculations", correct: false},
            {text: "Storing data permanently", correct: false},
            {text: "Designing hardware interfaces", correct: false},
        ]
    },

    {
        //no5
        question: "What term is used to describe a set of step-by-step instructions that a computer can execute to perform a specific task?",
        answers: [
            {text: "Script", correct: false},
            {text: "Code", correct: false},
            {text: "Syntax", correct: false},
            {text: "Algorithm", correct: true},
        ]
    },

    {
        //n06
        question: "Which storage device provides non-volatile, long-term storage in a computer system?",
        answers: [
            {text: "Read-only Memory (RAM)", correct: false},
            {text: "Solid-state Drive (SSD)", correct: true},
            {text: "USB Flash Drive", correct: false},
            {text: "Cache", correct: false},
        ]
    },

    {
        //no7
        question: "In the binary number system, what digit represents the value of 2 to the power of 0?",
        answers: [
            {text: "0", correct: false},
            {text: "1", correct: true},
            {text: "2", correct: false},
            {text: "4", correct: false},
        ]
    },

    {
        //no8
        question: "What is the primary function of the BIOS (Basic Input/Output System) in a computer?",
        answers: [
            {text: "Running applications", correct: false},
            {text: "Managing memory", correct: false},
            {text: "Conecting the computer", correct: false},
            {text: "Booting the computer", correct: true},
        ]
    },

    {
        //no9
        question: "What type of software is designed to protect a computer from malicious software and security threats?",
        answers: [
            {text: "Database management system", correct: false},
            {text: "Word processor", correct: false},
            {text: "Antivirus", correct: true},
            {text: "Firewall", correct: false},
        ]
    },

    {
        //no10
        question: "Which programming language is often used for creating dynamic webpages and server-side scripting?",
        answers: [
            {text: "Java", correct: false},
            {text: "PHP", correct: true},
            {text: "C++", correct: false},
            {text: "Swift", correct: false},
        ]
    },
        
]

const questionElement = document.getElementById("theQuestion");
const answerButton = document.getElementById("answerBtn");
const nextButton = document.getElementById("nextBtn");

let currentQuesIndex =  0;
let score = 0;

function startQuiz(){
    currentQuesIndex = 0;
    score: 0;
    nextButton.innerHTML = "Next";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuesIndex];
    let questionNo = currentQuesIndex + 1;
    console.log(questionNo);
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;

    currentQuestion.answers.forEach (answer => {
        const theButton = document.createElement("button");
        theButton.innerHTML = answer.text;
        theButton.classList.add("btn");
        answerButton.appendChild(theButton);

        if (answer.correct){
            theButton.dataset.correct = answer.correct;
        }
        theButton.addEventListener("click", selectAnswer);
    });
}

function resetState(){
    nextButton.style.display = "none"
    while(answerButton.firstChild){
        answerButton.removeChild(answerButton.firstChild);
    }
}

function selectAnswer(e){
    const selectedBtn = e.target;
    const isCorrect = selectedBtn.dataset.correct === "true";
    if (isCorrect){
        selectedBtn.classList.add("correct");
        score++;
    } else {
        selectedBtn.classList.add("incorrect");
    }
    Array.from(answerButton.children).forEach(theButton => {
        if (theButton.dataset.correct === "true"){
            theButton.classList.add("correct");
        }
        theButton.disabled = true;
    });
    nextButton.style.display = "block";
}

function showScore(){
    resetState();
    questionElement.innerHTML = `You scored ${score} out of ${questions.length}!`;
}

function handleNextButton(){
    currentQuesIndex++;
    if (currentQuesIndex < questions.length){
        showQuestion();
    } else {
        showScore();
    }
}

nextButton.addEventListener("click", () => {
    if (currentQuesIndex < questions.length){
        handleNextButton();
    }
})


startQuiz();

// {
//     question: "",
//     answers: [
//         {text: "", correct: true},
//         {text: "", correct: false},
//         {text: "", correct: false},
//         {text: "", correct: false},
//     ]
// },