<?php

namespace App\Http\Resources;

use App\DataStructures\Cars\Car;
use App\DataStructures\Cars\SpecMachine;
use App\DataStructures\Cars\Truck;
use Illuminate\Http\Resources\Json\JsonResource;

class CarListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $car = [
            'carType' => $this->resource->getCarType(),
            'photoFileExt' => $this->resource->getPhotoFileExt(),
            'brand' => $this->resource->getBrand(),
            'carrying' => $this->resource->getCarrying(),
        ];

        switch (get_class($this->resource)) {
            case Car::class:
                $car['passengerSeatsCount'] = $this->resource->getPassengerSeatsCount();
                break;
            case Truck::class:
                $car['bodyVolume'] = $this->resource->getBodyVolume();
                break;
            case SpecMachine::class:
                $car['extra'] = $this->resource->getExtra();
                break;
        }

        return $car;
    }
}
