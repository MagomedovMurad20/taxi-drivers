<?php

namespace App\Services;

use App\Models\Car;
use App\Models\User;

class DriverService
{
    public function getFreeCars()
    {
        $users = Car::all();
        $users->where('user_id', '=', null);
    }
}
