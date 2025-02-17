<?php

namespace BrainGames\Even;

use function BrainGames\Runner\gameRun;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function generateNumber(int $num): array
{
    $answer = isEven($num) ? "Yes" : "No";

    return [$num, $answer];
}

function evenGame(): void
{
    $description = "Answer 'Yes' if the number is even, otherwise answer 'No'.";
    $question = fn() => generateNumber(rand(1, 100));

    gameRun($description, $question);
}
