<?php

namespace App\Helpers;

use App\Services\VehicleService;
use Illuminate\Support\Facades\Log;

class VehicleHelper
{
    public static function getCarList(string $pathFileCSV): array
    {
        $vehicleService = new VehicleService();
        $carsArray = $vehicleService->convertCSVToArray($pathFileCSV);

        return $vehicleService->getCarObject($carsArray);
    }
}
