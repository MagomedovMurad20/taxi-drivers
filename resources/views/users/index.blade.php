@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Водители</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm" title="Add New User">
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
                                        <th>Имя</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>

                                            <td>
                                                <a href="{{ url('/user/' . $user->id) }}" title="View user"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> Посмотреть</button></a>
                                                <a href="{{ url('/user/' . $user->id . '/edit') }}"
                                                    title="Edit user"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Изменить</button></a>

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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
