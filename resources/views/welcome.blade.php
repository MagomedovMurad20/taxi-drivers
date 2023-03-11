@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="card">
                <h2 style="margin:20px; margin-left:15em;">Админ панель</h2>
                <a href="{{ url('/user') }}" class="btn btn-danger " title="Перейти">
                    Водители
                </a>
                </br>
                <a href="{{ url('/car') }}" class="btn btn-danger " title="Перейти">
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
                                <td>{{ $item->car['model'] }}</td>

                                <td>
                                    <a href="{{ url('/user/' . $item->id) }}" title="View user"><button
                                            class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                            Посмотреть</button></a>
                                    <a href="{{ url('/user/' . $item->id . '/edit') }}" title="Edit user"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i> Изменить</button></a>

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
            <a href="{{ url('/car/edit') }}" class="btn btn-danger " title="Перейти">
                Закрепить автомобиль за водителем </a>
            </br>
        </div>
    </div>
@endsection
