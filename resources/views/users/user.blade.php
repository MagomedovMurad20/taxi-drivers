@extends('layouts.main')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">User Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">ID : {{$user->id}}</h5>
        <p class="card-text">Имя : {{$user->name}}</p>
        <p class="card-text">Дата : {{$user->created_at}}</p>
  </div>
    </hr>
  </div>
</div>