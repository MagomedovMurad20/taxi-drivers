@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Автомобили</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/car/create') }}" class="btn btn-success btn-sm" title="Add New Car">
                            Добавить
                        </a>
                        <a href="{{ url('/') }}" class="btn btn-success btn-sm" title="Add New User">
                            На главную
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Название</th>
                                        <th>госномера</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cars as $car)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $car->model }}</td>
                                            <td>{{ $car->numbers }}</td>
                                            @if (isset($car->user->name))
                                                <td>{{ $car->user->name }}</td>
                                            @else
                                                <td></td>
                                            @endif

                                            <td>
                                                <a href="{{ url('/car' . '/' . $car->id) }}" title="View car"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> Посмотреть</button></a>
                                                <a href="{{ url('/car' . '/' . $car->id . '/edit') }}"
                                                    title="Edit car"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Изменить</button></a>
                                                @if ($car->user_id == null)
                                                    <a href="{{ '/car' . '/' . $car->id . '/edit' }}"
                                                        title="Edit car"><button class="btn btn-primary btn-sm"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            Назначить
                                                            водителя</button></a>
                                                @else
                                                    <a href="{{ url('/car' . '/' . $car->id . '/edit') }}"
                                                        title="Edit car"><button class="btn btn-primary btn-sm"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            Удалить водителя</button></a>
                                                @endif

                                                <form method="POST" action="{{ url('/car' . '/' . $car->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
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
            </div>
        </div>
    </div>
@endsection
