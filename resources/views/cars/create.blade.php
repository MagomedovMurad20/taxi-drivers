@extends('layouts.main')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New cars</div>
  <div class="card-body">
       
      <form action="{{ url('car') }}" method="POST">
        @csrf
        <label>Model</label></br>
        <input type="text" name="model" id="model" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop