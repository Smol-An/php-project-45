<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\play;

function getGcd(int $x, int $y)
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

function brainGcd()
{
    $gameRules = 'Find the greatest common divisor of given numbers.';

    $randomNumber1 = rand(1, 100);
    $randomNumber2 = rand(1, 100);
    $randomNumber3 = rand(1, 100);
    $randomNumber4 = rand(1, 100);
    $randomNumber5 = rand(1, 100);
    $randomNumber6 = rand(1, 100);

    $question1 = "{$randomNumber1} {$randomNumber2}";
    $question2 = "{$randomNumber3} {$randomNumber4}";
    $question3 = "{$randomNumber5} {$randomNumber6}";

    $correctAnswer1 = getGcd($randomNumber1, $randomNumber2);
    $correctAnswer2 = getGcd($randomNumber3, $randomNumber4);
    $correctAnswer3 = getGcd($randomNumber5, $randomNumber6);

    play($gameRules, $question1, $question2, $question3, $correctAnswer1, $correctAnswer2, $correctAnswer3);
}
