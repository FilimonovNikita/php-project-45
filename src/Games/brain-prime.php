<?php

namespace Braingames\Games\prime;

use function Braingames\Games\Engine\startGame;

function startprime()
{
    $welcomeMessage = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    
    $questionAnswerPairs = [];
    for ($i = 0, $numberOfQuestions = 3; $i < $numberOfQuestions; $i += 1) {
        $question = rand(1, 100);
        $isNumberPrime = gmp_prob_prime($question);
        if ($isNumberPrime == 0){
            $answer = "no";
        }
        else{
            $answer = "yes";
        }
        $questionAnswerPairs[] = [$question,(string) $answer];
    }
    startGame($welcomeMessage, $questionAnswerPairs);
}
