<?php
require 'questions.php';
require 'functions.php';

$questions = getQuestions();
$score = 0;

foreach ($questions as $q) {
    echo $q['question'];
    $userAnswer = trim(fgets(STDIN));

    if (checkAnswer($userAnswer, $q['answer'])) {
        echo "To'g'ri javob!\n";
        $score++;
    } else {
        echo "Noto'g'ri javob. To'g'ri javob: {$q['answer']}\n";
    }
}

displayResult($score, count($questions));
?>
