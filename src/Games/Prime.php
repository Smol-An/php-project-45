<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\play;


function isPrime(int $x): bool
{
    $denominatorsX = [];
    for ($i = 1; $i <= $x; $i += 1) {
        if ($x % $i === 0) {
            $denominatorsX[] = $i;
        }
    }

    $denominatorsPrime = [1, $x];
    return $denominatorsX === $denominatorsPrime;
}


function brainPrime()
{
    $gameRules = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $data = function () {
        $question = rand(1, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
