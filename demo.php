<?php
$stack1 = new SplStack();
$stack2 = new SplStack();
$stack3 = new SplStack();

$stack1Height = 0;
$stack2Height = 0;
$stack3Height = 0;
$h1 = [];
$h2 = [];
$h3 = [];
for ($i = count($h1) - 1; $i >= 0; $i--) {
    $stack1Height += $h1[$i];
    $stack1->push($stack1Height);
}
for ($i = count($h2) - 1; $i >= 0; $i--) {
    $stack2Height += $h2[$i];
    $stack2->push($stack2Height);
}
for ($i = count($h3) - 1; $i >= 0; $i--) {
    $stack3Height += $h3[$i];
    $stack3->push($stack3Height);
}
while (true) {
    if ($stack1->isEmpty() || $stack2->isEmpty() || $stack3->isEmpty())
        return 0;
    $stack1Height = $stack1->bottom();
    $stack2Height = $stack2->bottom();
    $stack3Height = $stack3->bottom();
    if ($stack1Height === $stack2Height && $stack2Height === $stack3Height)
        return $stack1Height;

    if ($stack1Height >= $stack2Height && $stack1Height >= $stack3Height)
        $stack1->pop();
    else if ($stack2Height >= $stack3Height && $stack2Height >= $stack1Height)
        $stack2->pop();
    else if ($stack3Height >= $stack2Height && $stack3Height >= $stack1Height)
        $stack3->pop();
}

