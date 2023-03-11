<?php

namespace App\Services;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class DriverService
{
    public static function getFreeCars()
    {
        return Car::whereNull('user_id')->get();
    }
    public static function getFreeUsers()
    {
        return User::where('busy', '=', 0)->get();
    }



    public function carDriverEdit($id)
    {
        $car = Car::find($id);
        $users = User::whereNull('busy')->get();
        return view('cars.car_driver_edit', compact(['car', 'users']));
    }

    public function carDiverUpdate(Request $request, $id)
    {
        $cars = Car::find($id);
        $cars->user_id = $request->user_id;
        $cars->save();

        return redirect('car')->with('flash_message', 'Driver Updated!');
    }
}
