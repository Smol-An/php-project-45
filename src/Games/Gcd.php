<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\play;

use const BrainGames\Engine\ROUNDS;

function getGcd(int $x, int $y): int
{
    $max = max($x, $y);
    $min = min($x, $y);

    for ($i = $min; $i >= 1; $i -= 1) {
        if ($max % $i === 0 && $min % $i === 0) {
            return $i;
        }
    }
}

function brainGcd()
{
    $gameRules = 'Find the greatest common divisor of given numbers.';

    $data = [];
    for ($i = 0; $i < ROUNDS; $i += 1) {
        $randomNumber1 = rand(1, 100);
        $randomNumber2 = rand(1, 100);
        $question = "{$randomNumber1} {$randomNumber2}";
        $correctAnswer = getGcd($randomNumber1, $randomNumber2);
        $data[] = [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
