<?php

namespace App\DataStructures\Cars;

class SpecMachine extends BaseCar
{
    /**
     * @var string
     */
    private $extra;

    /**
     * @param string $carType
     * @param string $photoFileName
     * @param string $brand
     * @param float $carrying
     * @param string $extra
     */
    public function __construct(string $carType, string $photoFileName, string $brand, float $carrying, string $extra)
    {
        parent::__construct($carType, $photoFileName, $brand, $carrying);
        $this->extra = $extra;
    }

    /**
     * @return string
     */
    public function getExtra(): string
    {
        return $this->extra;
    }
}
