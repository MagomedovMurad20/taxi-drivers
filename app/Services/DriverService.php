<?php

namespace App\Services;

use App\Models\Car;
use App\Models\User;

class DriverService
{
    public function getFreeCars()
    {
        $users = User::all();
        $users->where('car_id', '=', null);
    }
}
