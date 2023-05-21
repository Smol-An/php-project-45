<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function brainEven()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name', false, '? ');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i =1; $i <= 3; $i++) {
    $randomNumber = rand(1, 100);
    $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';
    line("Question: %s", $randomNumber);
    $answer = prompt('Your answer');
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again, %s!", $answer, $correctAnswer, $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}

brainEven();

