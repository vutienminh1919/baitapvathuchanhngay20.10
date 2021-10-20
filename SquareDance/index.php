<?php
include_once "Dancer.php";
include_once "SquareDance.php";

$dance1 = new Dancer("minh1",SquareDance::MALE);
$dance2 = new Dancer("minh2",SquareDance::MALE);
$dance3 = new Dancer("minh3",SquareDance::MALE);
$dance4 = new Dancer("minh4",SquareDance::MALE);
$dance5 = new Dancer("ngoctrinh1",SquareDance::FEMALE);
$dance6 = new Dancer("ngoctrinh2",SquareDance::FEMALE);
$dance7 = new Dancer("ngoctrinh3",SquareDance::FEMALE);

$dance = new SquareDance();
$dance->addDancer($dance1);
$dance->addDancer($dance2);
$dance->addDancer($dance3);
$dance->addDancer($dance4);
$dance->addDancer($dance5);
$dance->addDancer($dance6);
$dance->addDancer($dance7);

echo $dance->pairDance();