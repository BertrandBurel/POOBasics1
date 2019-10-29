<?php

class Bicycle
{
    /**
    * @var string
    */
    private $color;
    /**
    * @var integer
    */
    private $currentSpeed;
    /**
    * @var integer
    */
    private $nbSeats = 1;
    /**
    * @var integer
    */
    private $nbWheels = 2;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function start()
    {
        return "Go !";
    }

    public function forward()
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentspeed;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
}