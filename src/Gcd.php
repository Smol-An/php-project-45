<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;

function brainGcd()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name', false, '? ');
    line("Hello, %s!", $name);
    line('Find the greatest common divisor of given numbers.');

    function getGcd($x, $y)
    {
        $denominatorsX = [];
        for ($i = 1; $i <= $x; $i++) {
            if ($x % $i === 0) {
                $denominatorsX[] = $i;
            }
        }
        $denominatorsY = [];
        for ($j = 1; $j <= $y; $j++) {
            if ($y % $j === 0) {
                $denominatorsY[] = $j;
            }
        }
        $commonDenominators = array_intersect($denominatorsX, $denominatorsY);
        $gcd = max($commonDenominators);
        return $gcd;
    }

    for ($i = 1; $i <= 3; $i++) {
        $randomNumber1 = rand(1, 100);
        $randomNumber2 = rand(1, 100);
        $correctAnswer = getGcd($randomNumber1, $randomNumber2);
        line("Question: %s %s", $randomNumber1, $randomNumber2);
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
