<?php
function checkAnswer($userAnswer, $correctAnswer) {
    return strtolower($userAnswer) === $correctAnswer;
}

function displayResult($score, $totalQuestions) {
    echo "Sizning natijangiz: $score / $totalQuestions\n";
}
?>
