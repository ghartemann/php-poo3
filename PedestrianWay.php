<?php

final class PedestrianWay extends HighWay
{
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Skateboard || $vehicle instanceof Bike) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
