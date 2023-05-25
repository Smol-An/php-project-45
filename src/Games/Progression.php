<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\play;

function getRandomRow()
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

function getRandomMissedRow(array $arr, int $x)
{
    $randomMissedRow = [];
    for ($i = 0; $i < count($arr); $i++) {
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

    $randomRow1 = getRandomRow();
    $randomRow2 = getRandomRow();
    $randomRow3 = getRandomRow();

    $randomMissedNumber1 = rand(0, count($randomRow1) - 1);
    $randomMissedNumber2 = rand(0, count($randomRow2) - 1);
    $randomMissedNumber3 = rand(0, count($randomRow3) - 1);

    $randomMissedRow1 = getRandomMissedRow($randomRow1, $randomMissedNumber1);
    $randomMissedRow2 = getRandomMissedRow($randomRow2, $randomMissedNumber2);
    $randomMissedRow3 = getRandomMissedRow($randomRow3, $randomMissedNumber3);

    $question1 = implode(" ", $randomMissedRow1);
    $question2 = implode(" ", $randomMissedRow2);
    $question3 = implode(" ", $randomMissedRow3);

    $correctAnswer1 = $randomRow1[$randomMissedNumber1];
    $correctAnswer2 = $randomRow2[$randomMissedNumber2];
    $correctAnswer3 = $randomRow3[$randomMissedNumber3];

    play($gameRules, $question1, $question2, $question3, $correctAnswer1, $correctAnswer2, $correctAnswer3);
}
