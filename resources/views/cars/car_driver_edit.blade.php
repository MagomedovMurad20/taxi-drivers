@extends('layouts.main')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Изменить водителя</div>
        <div class="card-body">
            <div class="card-body">
                <div class="card-body">
                    <h5 class="card-title">ID : {{ $car->id }}</h5>
                    <p class="card-text">Модель : {{ $car->model }}</p>
                    <p class="card-text">Дата : {{ $car->created_at }}</p>
                </div>
                <form action="{{ url('car/' . $car->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method('PATCH')
                    <label>Закрепить за водителем</label></br>

                    <select class="form-control" name="user_id">
                        {{-- TODO: СДЕЛАТЬ ЧТОБЫ НЕ ВЫБИРАЛСЯ УЖЕ СУЩЕСТВУЮЩИЙ АЙДИ --}}
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach

                    </select></br>
                    <input type="submit" value="Изменить" class="btn btn-success"></br>
                </form>

            </div>
        </div>

    @stop
