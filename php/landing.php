<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/landing.css">
    <title>iTrivia </title>
</head>
<body>
    <header>
        <a href = "#" class="thisLogo">iTrivia</a>
            <nav>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Settings</a>
                <a href="login.php">Login</a>
            </nav>
    </header>

    <main>
        <div class="home">
            <section id = "home">
                <div class = "homeCon">
                <h1 style="justify-content: center; text-align: center;"> iTivia: Learn, Challenge, Conquer.<h1><br>
                <p>Sharpen your mind and connect with friends through the joy of trivia!</p><br>
                <h1 style="justify-content: center; text-align: center;">Rate Us!</h1>
                <p style="justify-content: center; text-align: center;">♣ ♣ ♣ ♣ ♣ ♣ ♣ ♣ ♣ ♣</p>
                </div>
            </section>
        </div>
    </main>

    <div class="about">
        <section id="about">
            <h1>Meet the Team Behind iTrivia</h1><br>
            <p>We at iTrvia are a group of trivia enthusiasts who believe learning shouldn't feel like a chore. Fueled by countless nights spent battling<br>
                over random facts and a shared love for expanding our knowledge, we created iTrivia. Our mission is to make trivia accessible and exciting<br>
                for everyone. We hope you'll join us on this journey of discovery, laughther, and the occassional friendly competition!</p><br>
            <h1>Mission</h1><br>
            <p>Our mission is to make iTrivia accessible and enjoyable for everyone, regardless of age or knowledge level.</p><br>
            <h1>Contact Us</h1><br>
            <p>We love to hear from our users! Feel free to reach out with any questions, feedback, or suggestions at our social media below<br>
            for trivia updates, new quiz and code challenge, and exclusive content!</p><br>
            <p style="font-weight: bold;">Email: iTriviaTeam@gmail.com</p><br>
            <p style="font-weight: bold;">Facebook: iTriviaTeam.com</p><br>
            <p style="font-weight: bold;">Twitter: @iTriviaTeam</p><br>
            <p style="font-weight: bold;">Instagram: @iTriviaTeam</p>
        </section>
    </div>

    <div class="services">
        <section id="services">
            <h1>Features that make iTrivia the ultimate iTrivia app.</h1><br>
            <p>Endless Trivia Fun: Tech time! Dive into hundreds of trivia categories covering fun facts about technology.</p><br>
            <p>Challenge your friends: Play solo or compete with friends in individual or team quiz and code challlenge battles.</p><br>
            <p>Climb the Leaderboards: The more you answer correctly, the higher you climb! Track your progress and become a trivia whiz.</p><br>
            <p>Become a Trivia Master: Leave ypur mark on the world of iTrivia! Contribute questions and become part of the ever-growing iTrivia library.</p><br><br>
            <h1>How It Works:</h1><br>
            <p>1. Sign up for a free account (or log in if you already have one).</p><br>
            <p>2. Pick your category (trivia (sp), quiz(sp & mp), code challenge(sp & mp)).</p><br>
            <p>3. Answer multiple-choice questions and see your score accumulate (quiz category).</p><br>
            <p>4. Challenge ypur friends to a battle of quiz and code challenge or play solo to improve your knowledge.</p><br>
            <button onclick = "location.href = '../php/quizzes.php';">Quiz</button>
            <button onclick = "location.href = '..php/ide.php';">Code Challenge</button>
        </section>
    </div>

    <div class="settings">
        <section id="settings">
            <h1>Account > Change username or password</h1><br>
            <h1>Themes</h1><br>
            <h1>Sounds</h1><br>
            <h1>Notifications</h1><br>
            <h1>Rate Us</h1><br>
            <h1>Logout</h1><br>
        </section>
    </div>

        

</body>
</html>