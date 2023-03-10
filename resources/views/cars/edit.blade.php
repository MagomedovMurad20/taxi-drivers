@extends('layouts.main')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit car</div>
  <div class="card-body">
       
      <form action="{{ url('car/' .$cars->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cars->id}}" id="id" />
        <label>Model</label></br>
        <input type="text" name="name" id="name" value="{{$cars->model}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop