<?php

abstract class HighWay
{
    // Attributs
    private array $currentVehicles = [];
    private int $nbLane;
    private int $maxSpeed;

    // Méthodes 
    public function addVehicle($vehicle)
    {
    }

    // Getters/setters
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    public function getNbLane()
    {
        return $this->nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
}
