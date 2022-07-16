@extends('users.layout')
@section('content')
<div class="card">
  <div class="card-header">Users Page</div>
  <div class="card-body">
      
      <form action="{{ url('users') }}" method="post">
        {!! csrf_field() !!}
        <label>Full Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Phone</label></br>
        <input type="number" name="phone" id="phone" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>