<?php

class SquareDance
{
    const MALE = "Male";
    const FEMALE = "Female";
    protected SplQueue $queueMale;
    protected SplQueue $queueFemale;


    public function __construct()
    {
        $this->queueMale = new SplQueue();
        $this->queueFemale = new SplQueue();
    }

    public function addDancer($dance)
    {
        if ($dance->getGender() === self::MALE) {
            $this->queueMale->enqueue($dance);
        } else {
            $this->queueFemale->enqueue($dance);
        }
    }

    public function pairDance()
    {
        while (!$this->queueFemale->isEmpty() || !$this->queueMale->isEmpty()) {
            if ($this->queueMale->isEmpty()) {
                return count($this->queueFemale) . " female waiting" . "<br>";
            }
            if ($this->queueFemale->isEmpty()) {
                return count($this->queueMale) . " male waiting " . "<br>";
            }
            echo "pair: " . $this->queueMale->dequeue()->getname() . "-" . $this->queueFemale->dequeue()->getName() . "<br>";
        }
    }

}