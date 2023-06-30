<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\play;

use const BrainGames\Engine\ROUNDS;

function isPrime(int $x): bool
{
    if ($x === 1) {
        return false;
    }

    for ($i = 2; $i < $x; $i += 1) {
        if ($x % $i === 0) {
            return false;
        }
    }

    return true;
}

function brainPrime()
{
    $gameRules = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $data = [];
    for ($i = 0; $i < ROUNDS; $i += 1) {
        $question = rand(1, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        $data[] = [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
