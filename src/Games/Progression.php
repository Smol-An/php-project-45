<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\play;

use const BrainGames\Engine\ROUNDS;

function getRandomProgression(): array
{
    $randomLength = rand(6, 10);
    $randomStep = rand(1, 3);
    $randomFirstNumber = rand(1, 20);
    $randomLastNumber = $randomFirstNumber + $randomStep * ($randomLength - 1);
    $randomProgression = [];
    for ($i = $randomFirstNumber; $i <= $randomLastNumber; $i += $randomStep) {
        $randomProgression[] = $i;
    }

    return $randomProgression;
}

function brainProgression(): void
{
    $gameRules = 'What number is missing in the progression?';

    $data = [];
    for ($i = 0; $i < ROUNDS; $i += 1) {
        $randomProgression = getRandomProgression();
        $randomMissedNumber = rand(0, count($randomProgression) - 1);
        $correctAnswer = $randomProgression[$randomMissedNumber];
        $randomProgression[$randomMissedNumber] = '..';
        $question = implode(" ", $randomProgression);
        $data[] = [$question, $correctAnswer];
    };

    play($gameRules, $data);
}
