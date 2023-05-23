<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;

function brainPrime()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name', false, '? ');
    line("Hello, %s!", $name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    function isPrime($x)
    {
        $denominatorsX = [];
        for ($j = 1; $j <= $x; $j++) {
            if ($x % $j === 0) {
                $denominatorsX[] = $j;
            }
        }
        $denominatorsPrime = [1, $x];
        return $denominatorsX === $denominatorsPrime ? 'yes' : 'no';
    }

    for ($i = 1; $i <= 3; $i++) {
        $randomNumber = rand(1, 100);
        $correctAnswer = isPrime($randomNumber);
        line("Question: %s", $randomNumber);
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again, %s!", $answer, $correctAnswer, $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
