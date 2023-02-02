<?php

namespace App\Services;

use App\DataStructures\Cars\Car;
use App\DataStructures\Cars\SpecMachine;
use App\DataStructures\Cars\Truck;
use Illuminate\Support\Facades\Log;

class VehicleService
{
    private const NUMBER_COLUMNS = 7;

    public function convertCSVToArray(string $pathFileCSV): array
    {
        $rawCars = array_map('str_getcsv', file($pathFileCSV));

        $cars = [];
        foreach($rawCars as $rawCar) {
            $cars[] = explode(';', $rawCar[0]);
        }

        return $cars;
    }

    public function getCarObject(array $carsArray): array
    {
        $carList = [];

        for ($i=1; $i< count($carsArray); $i++) {

            if (count($carsArray[$i]) !== self::NUMBER_COLUMNS ) {
                continue;
            }

            switch ($carsArray[$i][0]) {
                case 'car':
                    $carList[] = new Car(
                        $carsArray[$i][0],
                        $carsArray[$i][3],
                        $carsArray[$i][1],
                        (float)$carsArray[$i][5],
                        (int)$carsArray[$i][2]
                    );
                    break;
                case 'truck':
                    $carList[] = new Truck(
                        $carsArray[$i][0],
                        $carsArray[$i][3],
                        $carsArray[$i][1],
                        (float)$carsArray[$i][5],
                        $carsArray[$i][4]
                    );
                    break;
                case 'spec_machine':
                    $carList[] = new SpecMachine(
                        $carsArray[$i][0],
                        $carsArray[$i][3],
                        $carsArray[$i][1],
                        (float)$carsArray[$i][5],
                        $carsArray[$i][6]
                    );
                    break;
            }
        }

        return $carList;
    }
}
