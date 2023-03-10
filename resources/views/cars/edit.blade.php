@extends('layouts.main')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit car</div>
  <div class="card-body">
       
      <form action="{{ url('car/' .$car->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$car->id}}" id="id" />
        <label>Model</label></br>
        <input type="text" name="model" id="model" value="{{$car->model}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop