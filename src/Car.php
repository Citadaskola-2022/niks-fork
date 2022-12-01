<?php

declare(strict_types=1);

class Car
{

    public ?Driver $driver = null;

    private ?int $odometer;
    private string $number_plate;
    private float $fuelConsumption;

    public function __construct(
        int $odometer,
        string $number_plate,
        float $fuelConsumption
    )
    {
        $this->odometer = $odometer;
        $this->number_plate = $number_plate;
        $this->fuelConsumption = $fuelConsumption;
    }

    public function addKilometers(int $kilometer): Car
    {
        $this->odometer += $kilometer;

        return $this;
    }

    public function getConsumedLiters(): float
    {
        return $this->odometer * $this->fuelConsumption / 100;
    }

    public function __destruct()
    {
        // echo "Car $this->number_plate Destroyed </br>" . PHP_EOL;
    }

    /**
     * @return Driver|null
     */
    public function getDriver(): ?Driver
    {
        return $this->driver;
    }
}