@extends('layouts.layout')
@section('content')
 
<div class="row justify-content-center">
  <div class="mt-3 col-lg-4">
    <div class="row">
      <div class="col-lg-12"><h4>Add User</div>
    </div>
      <form action="{{ route('store') }}" method="post">
        {!! csrf_field() !!}
        <div class="mb-3">
          <label>Name</label>
          <input type="text" name="name" id="name" class="form-control">
          @if($errors->has('name'))
            <div class="error text-danger">{{ $errors->first('name') }}</div>
          @endif
        </div>
        <div class="mb-3">
          <label>Surname</label>
          <input type="text" name="surname" id="surname" class="form-control">
          @if($errors->has('surname'))
            <div class="error text-danger">{{ $errors->first('surname') }}</div>
          @endif
        </div>
        <div class="mb-3">
          <label>Email</label>
          <input type="text" name="email" id="email" class="form-control">
          @if($errors->has('email'))
            <div class="error text-danger">{{ $errors->first('email') }}</div>
          @endif
        </div>
        <div class="mb-3">
          <input type="submit" value="Save" class="btn btn-warning">
        </div>
    </form>
  </div>
</div>
@stop