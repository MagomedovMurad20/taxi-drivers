@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
                <div class="card">
                        <h2>Админ панель</h2>
                        <a href="{{ url('/user') }}" class="btn btn-danger btn-sm" title="Перейти">
                            Водители
                        </a>
                    </br>
                        <a href="{{ url('/car') }}" class="btn btn-danger btn-sm" title="Перейти">
                            Автомобили
                        </a>
                        
            </div>
        </div>
    </div>
@endsection