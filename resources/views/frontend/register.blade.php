@extends('frontend.layouts.main')
@push('title')
<title>SignUp</title>
@endpush
@section('main-section')
<div class="signup position-absolute z-3 border border-secondary top-50 start-50 translate-middle p-4 bg-white text-dark col-md-4">
    <form action="{{url('/')}}/signup" method="post">
      @csrf
      <h5 class="p-2 text-center text-secondary">Signup</h5>
      <hr>
          <x-input type="text" name="name" placeholder="Enter name"/>
          <x-input type="email" name="email" placeholder="Enter email"/>
          <x-input type="password" name="password" placeholder="Enter password"/>
          <x-input type="password" name="password_confirmation" placeholder="Confirm password"/>
          <div class="d-flex justify-content-end mt-1">
            <input type="checkbox" name="" id="" onclick="showPassword()"> <small class="text-secondary">show password</small> 
          </div>
          <input type="submit" name="login" value="signup" class="btn btn-dark col-md-12 mt-5 p-2">
    </form>
    <span class="text-center text-secondary mt-2">Already have an account? <a href="{{url('/')}}/login">Login</a></span>

    <div style="height: 5px;"></div>
    <div style="color: rgba(255,148,148); font-size: 1em;">
   
    </div>
    <div style="height: 5px;"></div>
  </div>
@endsection