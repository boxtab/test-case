<?php

namespace App\Http\Controllers;

use App\Helpers\VehicleHelper;
use App\Http\Requests\CarRequest;
use App\Http\Resources\CarListResource;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse|Response
     */
    public function index(CarRequest $request)
    {
        $pathFileCSV = $request->file('file')->getRealPath();

        $carList = VehicleHelper::getCarList($pathFileCSV);

        return response()->json([
            'success' => true,
            'data' => CarListResource::collection($carList),
        ]);
    }
}
