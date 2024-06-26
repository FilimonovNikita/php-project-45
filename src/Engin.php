<?php

namespace Braingames\Games\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\welcome;

function startGame(string $welcomeMessage, array $questionAnswerPairs)
{
    $name = welcome();
    line($welcomeMessage);
    $passed = true;
    foreach ($questionAnswerPairs as [$question, $answer]) {
        line("Question: {$question}");
        $userAnsfer = prompt("Your answer: ");
        if ($userAnsfer !== $answer) {
            line("'{$userAnsfer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let's try again, %s!", $name);
            $passed &= false;
            break;
        } else {
            line("Correct!");
        }
    }
    if ((bool) $passed) {
        line("Congratulations, {$name}!");
    }
}
