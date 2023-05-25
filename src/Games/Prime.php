<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\play;

function isPrime(int $x)
{
    $denominatorsX = [];
    for ($i = 1; $i <= $x; $i++) {
        if ($x % $i === 0) {
            $denominatorsX[] = $i;
        }
    }
    $denominatorsPrime = [1, $x];
    return $denominatorsX === $denominatorsPrime ? 'yes' : 'no';
}

function brainPrime()
{
    $gameRules = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $question1 = rand(1, 100);
    $question2 = rand(1, 100);
    $question3 = rand(1, 100);

    $correctAnswer1 = isPrime($question1);
    $correctAnswer2 = isPrime($question2);
    $correctAnswer3 = isPrime($question3);

    play($gameRules, $question1, $question2, $question3, $correctAnswer1, $correctAnswer2, $correctAnswer3);
}
