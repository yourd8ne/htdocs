<?php 
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
echo session_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keyb</title>
    <link rel="stylesheet" href="src/style.css" />
</head>
<body>
    <div class="container">
        
        <div class="question">
            <form class="choose">
                ЯП:
                <select id="prog-lang">
                    <option value="" selected="selected">Python</option>
                    <option value="" >C++</option>
                    <option value="" >Java</option>
                </select>
            </form>
        </div>
        <div class="run">
            <div class="sample">
                a = 0.1 + 0.3
                b = 0.3
                print(a == b)
            </div>
            <input type="text" id="input" onpaste="return false;">
            <div id="time"></div>
            <div id="speed"></div>
        </div>
    </div>
</body>
</html>