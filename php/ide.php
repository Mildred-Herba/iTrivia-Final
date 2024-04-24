<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Challenge</title>
    <link rel = "stylesheet" href = "../css/ide.css">
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

    <div class = "editor">
        <div class = "eWrap">
                <p>Question</p>
            <div class="eBody">
                <p>Choose a language:</p>
                <select id="lang" onclick="option()">
                    <option value = ""></option>
                    <option value = "js">Javascript</option>
                    <option value = "php">PHP</option>
                    <option value = "java">Java</option>
                    <option value = "c++">C++</option>
                    <option value = "phy">Phython</option>
                </select>
                <button class = "editorRun">Run</button>
                <button class = "editorReset">Reset</button>
                <p id = "example"></p>
                <div id = "eCode" class="eCode">

                </div>
                
            </div>
            <div class = "eFooter">
                <div class = "eOutput">
                </div>
            </div>
        </div>  
    </div>


    <script src = "../lib/src-min/ace.js"></script>
    <script src = "../lib/src-min/mode-javascript.js"></script>
    <script src = "../lib/src-min/mode-php.js"></script>
    <script src = "../lib/src-min/ext-language_tools.js"></script>
    <script src = "../lib/src-min/mode-java.js"></script>
    <script src = ".//lib/src-min/mode-c_cpp.js>"></script>

    <script src = "../js/ideEditor.js"></script>
    <script src = "../js/ideConsole.js"></script>
</body>
</html>

