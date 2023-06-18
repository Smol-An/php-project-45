<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\play;

function getGcd(int $x, int $y): int
{
    $denominatorsX = [];
    for ($i = 1; $i <= $x; $i += 1) {
        if ($x % $i === 0) {
            $denominatorsX[] = $i;
        }
    }

    $denominatorsY = [];
    for ($j = 1; $j <= $y; $j += 1) {
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

    $data = function () {
        $randomNumber1 = rand(1, 100);
        $randomNumber2 = rand(1, 100);
        $question = "{$randomNumber1} {$randomNumber2}";
        $correctAnswer = getGcd($randomNumber1, $randomNumber2);
        return [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
