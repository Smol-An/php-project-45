<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\play;


function isEven(int $x): bool
{
    return $x % 2 === 0;
}


function brainEven()
{
    $gameRules = 'Answer "yes" if the number is even, otherwise answer "no".';

    $data = function () {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
