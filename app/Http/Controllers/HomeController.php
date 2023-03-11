<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Home;
use App\Models\User;


class HomeController extends Controller
{

    public function index()
    {
        $users = User::all();
        $cars = Car::all();
        return view('welcome', compact(['users', 'cars']));
    }
}
