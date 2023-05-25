<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function play($gameRules, $question1, $question2, $question3, $correctAnswer1, $correctAnswer2, $correctAnswer3)
{
    line('Welcome to the Brain Games!');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);

    line("%s", $gameRules);

    line("Question: %s", $question1);
    $playerAnswer1 = prompt('Your answer');
    if ($playerAnswer1 == $correctAnswer1) {
        line('Correct!');
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $playerAnswer1, $correctAnswer1);
        line("Let's try again, %s!", $playerName);
        return;
    }

    line("Question: %s", $question2);
    $playerAnswer2 = prompt('Your answer');
    if ($playerAnswer2 == $correctAnswer2) {
        line('Correct!');
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $playerAnswer2, $correctAnswer2);
        line("Let's try again, %s!", $playerName);
        return;
    }

    line("Question: %s", $question3);
    $playerAnswer3 = prompt('Your answer');
    if ($playerAnswer3 == $correctAnswer3) {
        line('Correct!');
        line("Congratulations, %s!", $playerName);
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $playerAnswer3, $correctAnswer3);
        line("Let's try again, %s!", $playerName);
    }
}
