@extends('layouts.main')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Добавить нового водителя</div>
  <div class="card-body">
       
      <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label>Имя</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop