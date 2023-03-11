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
            <h2 style="margin:20px; margin-left:15em;">Сейчас за рулем</h2>

            <div class="table-responsive">
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
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                @if (isset($item->car['model']))
                                    <td>{{ $item->car['model'] }}</td>
                                @else
                                    <td></td>
                                @endif

                                <td>
                                    <a href="{{ url('/user' . '/' . $item->id) }}" title="View user"><button
                                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                            Посмотреть</button></a>
                                    <a href="{{ url('/user' . '/' . $item->id . '/edit') }}" title="Edit user"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i> Изменить</button></a>
                                    @if (!isset($item->car['model']))
                                        <a href="{{ url('/car_driver' . '/' . $item->id . '/edit') }}"
                                            title="Edit car"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                Назначить
                                                водителя</button></a>
                                    @else
                                        <form method="POST" action="{{ '/car_driver' . '/' . $item->id . '/destroy' }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete user"
                                                onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i> Удалить водителя</button>
                                        </form>
                                    @endif
                                    <form method="POST" action="{{ url('/user' . '/' . $item->id) }}"
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
            <h2 style="margin:20px; margin-left:15em;">Админ панель</h2>
            <a href="{{ url('/car') }}" class="btn btn-info " title="Перейти">
                Закрепить автомобиль за водителем </a>
            </br>
        </div>
    </div>
@endsection
