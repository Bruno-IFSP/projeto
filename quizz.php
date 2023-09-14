<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Quiz</title>
</head>
<body>

<h2>Quiz</h2>

<div class="container" id="container">
    <div class="form-container">
        <form action="quiz.php" method="post">
            <h1>Question 1:</h1>
            <p>What is the capital of France?</p>
            <input type="radio" name="q1" value="Paris"> Paris<br>
            <input type="radio" name="q1" value="London"> London<br>
            <input type="radio" name="q1" value="Berlin"> Berlin<br>
            <input type="radio" name="q1" value="Berlin"> Complexo da Maré<br>

            <h1>Question 2:</h1>
            <p>What is 2 + 2?</p>
            <input type="radio" name="q2" value="3"> 3<br>
            <input type="radio" name="q2" value="4"> 4<br>
            <input type="radio" name="q2" value="5"> 5<br>
            <input type="radio" name="q2" value="5"> 9<br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Check answers for question 1 and 2
    if ($_POST["q1"] == "Paris") {
        $score++;
    }

    if ($_POST["q2"] == "4") {
        $score++;
    }

    // Display the result
    echo "<div class='result-container'>";
    echo "<h1>Your Score: $score/2</h1>";
    echo "</div>";
}
?>

<footer>

</footer>

</body>
</html>
