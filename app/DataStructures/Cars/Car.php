<?php

namespace App\DataStructures\Cars;

class Car extends BaseCar
{
    /**
     * @var int
     */
    private $passengerSeatsCount;

    /**
     * @param string $carType
     * @param string $photoFileName
     * @param string $brand
     * @param float $carrying
     * @param int $passengerSeatsCount
     */
    public function __construct(string $carType, string $photoFileName, string $brand, float $carrying, int $passengerSeatsCount)
    {
        parent::__construct($carType, $photoFileName, $brand, $carrying);
        $this->passengerSeatsCount = $passengerSeatsCount;
    }

    /**
     * @return int
     */
    public function getPassengerSeatsCount(): int
    {
        return $this->passengerSeatsCount;
    }
}
