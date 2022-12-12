@extends('users.layout')
@section('content')

<div class="card">
  <div class="card-header">Yonder Users</div>
    <div class="card-body">
      <div class="card-body">
      <h5 class="card-title">Name : {{ $user->name }}</h5>
      <p class="card-text">Surname : {{ $user->surname }}</p>
      <p class="card-text">Email : {{ $user->email }}</p>
    </div>
    </hr> 
  </div>
</div>