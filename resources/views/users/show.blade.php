@extends('users.layout')
@section('content')
<div class="card">
  <div class="card-header">Users Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h2 class="card-title">Full Name : {{ $users->name }}</h2>
        <br>
        <p class="card-text">Email : {{ $users->email }}</p>
        <p class="card-text">Phone : {{ $users->phone }}</p>
        <form action="/users" method="GET" style=" background-color: inherit">
              <br><br>
              <button type="submit" name="back"> Return to Table </button>
        </form>
      </div>
    </hr>
  
  </div>
</div>