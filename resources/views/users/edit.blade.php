@extends('layouts.main')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Изменить данные водителя</div>
        <div class="card-body">

            <form action="{{ url('user/' . $user->id) }}" method="post">
                @csrf
                @method('PATCH')
                {{-- <input type="hidden" name="id" id="id" value="{{ $user->id }}" id="id" /> --}}
                <label>Имя</label></br>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control"></br>
                <input type="submit" value="Сохранить" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
