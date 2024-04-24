<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel = "stylesheet" href = "../css/quizzes.css"">
</head>

<body>
    
    <header>
        <a href = "#" class="thisLogo">iTrivia</a>
            <nav>
                <a href="..//php/landing.php">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Settings</a>
                <a href="../php/login.php">Login</a>
            </nav>
    </header>

    <div class = "welcome" id="welcome">
        <h1>Welcome User</h1>
        <h3>Let's begin the quiz and test your knowledge</h3>
        <button class="btn" onclick= "startTheQuiz()">Begin</button>
    </div>

    <div class = "quizCon" id  = "quizCon"style="display: none;">
        <h1>iTrivia Quiz</h1>
        <div class = "quizConToo">
            <h2 id = "theQuestion">Question</h2>
            <div id= "answerBtn">
                <button class = "btn">Answer 1</button> 
                <button class = "btn">Answer 2</button>
                <button class = "btn">Answer 3</button>
                <button class = "btn">Answer 4</button>
            </div>
            <button id = "nextBtn">Next</button>
        </div>
    </div>

    <script src = "../js/quizzes.js"></script>
</body>
</html>