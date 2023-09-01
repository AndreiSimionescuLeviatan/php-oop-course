<?php

require_once "Robot.php";
require_once "Drone.php";

class FlyingRobot
{
    use \Example3\DroneTrait, \Example3\RobotTrait
    {
        \Example3\DroneTrait::setMaxSpeed insteadof \Example3\RobotTrait;
        \Example3\DroneTrait::getMaxSpeed insteadof \Example3\RobotTrait;
        \Example3\DroneTrait::setMaxSpeed as setFlyingMaxSpeed;
        \Example3\DroneTrait::getMaxSpeed as getFlyingMaxSpeed;
        \Example3\RobotTrait::setMaxSpeed as setRunningSpeed;
        \Example3\RobotTrait::getMaxSpeed as getRunningSpeed;
    }


    public function __construct(int $maxRunningSpeed, $maxWalkingTime)
    {
        parent::__construct($maxRunningSpeed, $maxWalkingTime);
    }
}