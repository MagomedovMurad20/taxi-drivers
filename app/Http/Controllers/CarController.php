<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $cars = new Car;
        $cars->model = $request->model;
        $cars->save();

        return redirect('car')->with('flash_message', 'Car Addedd!');
    }


    public function show(Car $car)
    {
        return view('cars.car', compact('car'));
    }

    public function edit(Car $car)
    {
        $users = User::all();
        return view('cars.edit', compact(['car', 'users']));
    }


    public function update(Request $request, $id)
    {
        $cars = Car::find($id);
        $cars->model = $request->model;
        $cars->user_id = $request->user_id;
        $cars->save();

        return redirect('car')->with('flash_message', 'Car Updated!');
    }


    public function destroy($id)
    {
        Car::destroy($id);
        return redirect('car')->with('flash_message', 'Car deleted!');
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

    public function carDriverDestroy($id)
    {
        $car = Car::find($id);
        $car->destroy('user_id');
        return back()->with('flash_message', 'Driver deleted!');
    }
}
