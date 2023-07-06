<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\play;

use const BrainGames\Engine\ROUNDS;

function getRandomRow(): array
{
    $randomLength = rand(6, 10);
    $randomStep = rand(1, 3);
    $randomFirstNumber = rand(1, 20);
    $randomLastNumber = $randomFirstNumber + $randomStep * ($randomLength - 1);
    $randomRow = [];
    for ($i = $randomFirstNumber; $i <= $randomLastNumber; $i += $randomStep) {
        $randomRow[] = $i;
    }

    return $randomRow;
}

function brainProgression()
{
    $gameRules = 'What number is missing in the progression?';

    $data = [];
    for ($i = 0; $i < ROUNDS; $i += 1) {
        $randomRow = getRandomRow();
        $randomMissedNumber = rand(0, count($randomRow) - 1);
        $correctAnswer = $randomRow[$randomMissedNumber];
        $randomRow[$randomMissedNumber] = '..';
        $question = implode(" ", $randomRow);
        $data[] = [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
