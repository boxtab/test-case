<?php

namespace App\DataStructures\Cars;

class Truck extends BaseCar
{
    private const NUMBER_SIDES = 3;

    /**
     * @var float
     */
    private $bodyWidth = 0;

    /**
     * @var float
     */
    private $bodyHeight = 0;

    /**
     * @var float
     */
    private $bodyLength = 0;

    /**
     * @param string $carType
     * @param string $photoFileName
     * @param string $brand
     * @param float $carrying
     * @param string $bodyWhl
     */
    public function __construct(string $carType, string $photoFileName, string $brand, float $carrying, string $bodyWhl)
    {
        parent::__construct($carType, $photoFileName, $brand, $carrying);
        $bodyWhlThree = explode('x', $bodyWhl, self::NUMBER_SIDES);
        if ( count($bodyWhlThree) === self::NUMBER_SIDES ) {
            $this->bodyWidth = $bodyWhlThree[0];
            $this->bodyHeight= $bodyWhlThree[1];
            $this->bodyLength= $bodyWhlThree[2];
        }
    }

    public function getBodyVolume(): float
    {
        return $this->bodyWidth * $this->bodyHeight * $this->bodyLength;
    }
}
