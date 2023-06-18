<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;


function play(string $gameRules, callable $data)
{
    line('Welcome to the Brain Games!');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);

    line("%s", $gameRules);

    for ($i = 1, $rounds = 3; $i <= $rounds; $i += 1) {
        [$question, $correctAnswer] = $data();
        line("Question: %s", $question);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $playerAnswer, $correctAnswer);
            line("Let's try again, %s!", $playerName);
            return;
        }
    }

    line("Congratulations, %s!", $playerName);
}
