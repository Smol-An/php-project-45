<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\play;


function getRandomRow(): array
{
    $randomLength = rand(6, 10);
    $randomStep = rand(1, 3);
    $randomFirstNumber = rand(1, 20);
    $randomRow = [];
    for ($i = $randomFirstNumber; $i < ($randomFirstNumber + $randomLength * $randomStep); $i += $randomStep) {
        $randomRow[] = $i;
    }
    return $randomRow;
}


function getRandomMissedRow(array $arr, int $x): array
{
    $randomMissedRow = [];
    for ($i = 0; $i < count($arr); $i += 1) {
        if ($i === $x) {
              $randomMissedRow[] = '..';
        } else {
              $randomMissedRow[] = $arr[$i];
        }
    }
    return $randomMissedRow;
}


function brainProgression()
{
    $gameRules = 'What number is missing in the progression?';

    $data = function () {
        $randomRow = getRandomRow();
        $randomMissedNumber = rand(0, count($randomRow) - 1);
        $randomMissedRow = getRandomMissedRow($randomRow, $randomMissedNumber);
        $question = implode(" ", $randomMissedRow);
        $correctAnswer = $randomRow[$randomMissedNumber];
        return [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
