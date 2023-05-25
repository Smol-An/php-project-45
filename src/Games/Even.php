<?php

namespace BrainGames\Even;

use function BrainGames\Engine\play;

function brainEven()
{
    $gameRules = 'Answer "yes" if the number is even, otherwise answer "no".';

    $question1 = rand(1, 100);
    $question2 = rand(1, 100);
    $question3 = rand(1, 100);

    $correctAnswer1 = $question1 % 2 === 0 ? 'yes' : 'no';
    $correctAnswer2 = $question2 % 2 === 0 ? 'yes' : 'no';
    $correctAnswer3 = $question3 % 2 === 0 ? 'yes' : 'no';

    play($gameRules, $question1, $question2, $question3, $correctAnswer1, $correctAnswer2, $correctAnswer3);
}
