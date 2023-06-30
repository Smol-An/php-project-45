<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function play(string $gameRules, array $data)
{
    line('Welcome to the Brain Games!');
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);

    line("%s", $gameRules);

    for ($i = 0; $i < ROUNDS; $i += 1) {
        [$question, $correctAnswer] = $data[$i];
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
