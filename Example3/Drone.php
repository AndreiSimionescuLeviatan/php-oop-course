<?php

namespace Example3;

trait DroneTrait
{
    private $maxFlyingSpeed=0;
    private $maxFlyingTime;
    public function getMaxSpeed(): int
    {
        return $this->maxFlyingSpeed;
    }

    public function setMaxSpeed(int $maxFlyingSpeed)
    {
        $this->maxFlyingSpeed = $maxFlyingSpeed;
    }

    public function getMaxFlyingTime()
    {
        return $this->maxFlyingTime;
    }

    public function setMaxFlyingTime($maxFlyingTime)
    {
        $this->maxFlyingTime = $maxFlyingTime;
    }
}
class Drone
{
    public $cameraResolution;
    use DroneTrait;

    public function __construct($cameraResolution)
    {
        $this->cameraResolution = $cameraResolution;
    }

    public function getCameraResolution()
    {
        return $this->cameraResolution;
    }

    public function setCameraResolution($cameraResolution)
    {
        $this->cameraResolution = $cameraResolution;
    }

}