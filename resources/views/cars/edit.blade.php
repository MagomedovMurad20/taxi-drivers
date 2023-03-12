@extends('layouts.main')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Изменить данные автомобиля</div>
        <div class="card-body">

            <form action="{{ url('car/' . $car->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $car->id }}" id="id" />
                <label>Модель</label></br>
                <input type="text" name="model" id="model" value="{{ $car->model }}" class="form-control"></br>
                @if ($car->user_id == null)
                    <label>Закрепить за водителем</label></br>

                    <select class="form-control" name="user_id">
                        @foreach ($users as $user)
                            {{-- TODO: СДЕЛАТЬ ЧТОБЫ НЕ ВЫБИРАЛСЯ УЖЕ ЗАНЯТЫЙ ВОДИТЕЛЬ --}}
                            @if ($user->car === null)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                        @endforeach
                    </select></br>
                    <input type="submit" value="Изменить" class="btn btn-success"></br>
                @else
                    <p> Водитель {{ $car->user->name }}</p>
                    <input type="submit" value="Удалить водителя" class="btn btn-success"></br>

                @endif


            </form>

        </div>
    </div>

@stop
