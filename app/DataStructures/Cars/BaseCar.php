<?php

namespace App\DataStructures\Cars;

class BaseCar
{
    /**
     * @var string
     */
    protected $carType;

    /**
     * @var string
     */
    protected $photoFileName;

    /**
     * @var string
     */
    protected $brand;

    /**
     * @var float
     */
    protected $carrying;

    /**
     * @param string $carType
     * @param string $photoFileName
     * @param string $brand
     * @param float $carrying
     */
    public function __construct(string $carType, string $photoFileName, string $brand, float $carrying)
    {
        $this->carType = $carType;
        $this->photoFileName = $photoFileName;
        $this->brand = $brand;
        $this->carrying = $carrying;
    }

    /**
     * @return string
     */
    public function getPhotoFileExt(): string
    {
        return '.' . pathinfo($this->photoFileName, PATHINFO_EXTENSION);
    }

    /**
     * @return string
     */
    public function getCarType(): string
    {
        return $this->carType;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return float
     */
    public function getCarrying(): float
    {
        return $this->carrying;
    }
}
