@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="card">
                <h2 style="margin:20px; margin-left:15em;">Админ панель</h2>
                <a href="{{ url('/user') }}" class="btn btn-info " title="Перейти">
                    Водители
                </a>
                </br>
                <a href="{{ url('/car') }}" class="btn btn-info " title="Перейти">
                    Автомобили
                </a>
            </div>
            <h2 style="margin:20px; margin-left:15em;">Водители</h2>

            <div class="table-responsive">
                <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm" title="Add New User">
                    Добавить водителя
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Автомобиль</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                @if (isset($user->car['model']))
                                    <td>{{ $user->car['model'] }}</td>
                                @else
                                    <td></td>
                                @endif

                                <td>
                                    <a href="{{ url('/user' . '/' . $user->id) }}" title="View user"><button
                                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                            Посмотреть</button></a>
                                    <a href="{{ url('/user' . '/' . $user->id . '/edit') }}" title="Edit user"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i> Изменить</button></a>
                                    <form method="POST" action="{{ url('/user' . '/' . $user->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete user"
                                            onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i> Удалить</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <h2 style="margin:20px; margin-left:15em;">Автомобили</h2>

            <div class="table-responsive">
                <a href="{{ url('/car/create') }}" class="btn btn-success btn-sm" title="Add New Car">
                    Добавить автомобиль
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Название</th>
                            <th>Занято</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $car->model }}</td>
                                @if (isset($car->user_id))
                                    <td>{{ $car->user->name }}</td>
                                @else
                                    <td></td>
                                @endif

                                <td>
                                    <a href="{{ url('/car' . '/' . $car->id) }}" title="View car"><button
                                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                            Посмотреть</button></a>
                                    <a href="{{ url('/car' . '/' . $car->id . '/edit') }}" title="Edit car"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>
                                            Изменить</button></a>
                                    @if (!isset($car->user_id))
                                        <a href="{{ url('/car' . '/' . $car->id . '/edit') }}" title="Edit car"><button
                                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i>
                                                Назначить
                                                водителя</button></a>
                                    @else
                                        <a href="{{ url('/car' . '/' . $car->id . '/edit') }}" title="Edit car"><button
                                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i>
                                                Удалить водителя</button></a>
                                    @endif
                                    <form method="POST" action="{{ url('/car' . '/' . $car->id) }}" accept-charset="UTF-8"
                                        style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete car"
                                            onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i> Удалить</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
