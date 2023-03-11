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
                            Назад
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Название</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cars as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->model }}</td>

                                            <td>
                                                <a href="{{ url('/car/' . $item->id) }}" title="View car"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> Посмотреть</button></a>
                                                <a href="{{ url('/car/' . $item->id . '/edit') }}" title="Edit car"><button
                                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i> Изменить</button></a>
                                                @if ($item->user_id == null)
                                                    <a href="{{ url('/car_driver/' . $item->id . '/edit') }}"
                                                        title="Edit car"><button class="btn btn-primary btn-sm"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            Назначить
                                                            водителя</button></a>
                                                @endif

                                                <form method="POST" action="{{ url('/car' . '/' . $item->id) }}"
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
