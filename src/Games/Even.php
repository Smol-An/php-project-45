<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\play;

use const BrainGames\Engine\ROUNDS;

function isEven(int $x): bool
{
    return $x % 2 === 0;
}

function brainEven()
{
    $gameRules = 'Answer "yes" if the number is even, otherwise answer "no".';

    $data = [];
    for ($i = 0; $i < ROUNDS; $i += 1) {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        $data[] = [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
