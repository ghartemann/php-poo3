<?php

final class MotorWay extends HighWay
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
