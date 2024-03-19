@extends('layouts.main')
@section('content')
    {{-- TODO узнать почему undefind variable $user после обновления исчезает --}}
    <div class="card" style="margin:20px;">
        <div class="card-header">Страница водителя</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">ID : {{ $user->id }}</h5>
                <p class="card-text">Имя : {{ $user->name }}</p>
                <p class="card-text">Имя : {{ $user->lastname }}</p>
                @if (isset($user->car['model']))
                    <p class="card-text">Назначено авто : {{ $user->car['model'] }}</p>
                @endif
                <p class="card-text">Дата : {{ $user->created_at }}</p>
            </div>
            </hr>
        </div>
    </div>
