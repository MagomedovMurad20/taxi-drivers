@extends('layouts.main')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Добавить новый автомобиль</div>
  <div class="card-body">
       
      <form action="{{ route('car.store') }}" method="POST">
        @csrf
        <label>Модель</label></br>
        <input type="text" name="model" id="model" class="form-control"></br>
        <label>Гос-номера</label></br>
        <input type="text" name="numbers" id="numbers" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop