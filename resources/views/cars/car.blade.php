@extends('layouts.main')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Страница автомобилия</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">ID : {{ $car->id }}</h5>
                <p class="card-text">Модель : {{ $car->model }}</p>
                <p class="card-text">Номера : {{ $car->numbers }}</p>
                @if (isset($car->user->name))
                    <class="card-text">{{ $car->user->name }}</p>
                @endif
                <p class="card-text">Дата : {{ $car->created_at }}</p>


            </div>
            </hr>
        </div>
    </div>
