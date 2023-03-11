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


    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.car', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::find($id);
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
}
