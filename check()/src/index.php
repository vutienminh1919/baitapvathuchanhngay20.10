<?php

function check($str)
{
    $stack = new SplStack();
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === "(") {
            $stack->push($str[$i]);
        } else if ($str[$i] === ")") {
            if (!$stack->isEmpty()) {
                $stack->pop();
            } else {
                $stack->push($str[$i]);
            }
        }
    }

    if ($stack->isEmpty()) {
        echo " right format";
    } else {
        echo " wrong format";
    }

}

check("s * (s – a) * (s – b) * (s – c)");



