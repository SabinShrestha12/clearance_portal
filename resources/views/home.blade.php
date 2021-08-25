@extends('layout')
@section('main_login')
<div class="container login_padding" style="margin-top :150px; ">
  <div class="row align-items-md-stretch">
    <div class="col-md-6">
      <div class="h-100 p-5 text-white bg rounded-3">
        <h2>Login for staff </h2>
        <a class="btn btn-outline-light" href="{{ asset('./login') }}">CLick here</a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="h-100 p-5 bg-light border rounded-3">
        <h2>Login for student</h2>
        <a class="btn btn-outline-light" href="{{ asset('./login_2') }}">CLick here</a>
      </div>
    </div>
  </div>
</div>
@endsection