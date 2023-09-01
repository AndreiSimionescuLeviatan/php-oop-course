<?php

namespace Example3;

trait RobotTrait
{
    private $maxRunningSpeed=0;
    private $maxWalkingTime;
    public function __construct(int $maxRunningSpeed, $maxWalkingTime)
    {
        $this->maxRunningSpeed = $maxRunningSpeed;
        $this->maxWalkingTime = $maxWalkingTime;
    }

    public function getMaxRunningSpeed(): int
    {
        return $this->maxRunningSpeed;
    }

    public function setMaxSpeed(int $maxRunningSpeed)
    {
        $this->maxRunningSpeed = $maxRunningSpeed;
    }

    public function getMaxSpeed()
    {
        return $this->maxWalkingTime;
    }

    public function setMaxWalkingTime($maxWalkingTime)
    {
        $this->maxWalkingTime = $maxWalkingTime;
    }
}

class Robot
{
    use RobotTrait;
}