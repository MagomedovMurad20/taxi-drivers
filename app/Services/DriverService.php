<?php

namespace App\Services;

use App\Models\Car;
use App\Models\User;

class DriverService
{
    public function getFreeCars()
    {
        $cars = Car::whereNull('user_id')->get();
    }

    public function getFreeUsers()
    {
        $users = User::whereNull('car_id')->get();
    }
}
