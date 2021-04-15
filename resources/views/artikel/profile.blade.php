@extends('home')

@section('judul')
  <div>
    My Profile
  </div>
@endsection
  
@section('main')
  <div class="card">
  <div class="card-header">
    <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.png') }}" style="width: 200px;">
  </div>
  <div class="card-body card-block">
    <form action="{{ url("/user") }}" method="post">
      @csrf  
      <div class="form-group"><label for="name" class=" form-control-label">Full Name</label><input value="{{ Auth::user()->name }}" type="name" id="name" name="name" placeholder="Enter Name.." class="form-control">
      </div>
      <div class="form-group"><label for="email" class=" form-control-label">Email</label><input value="{{ Auth::user()->email }}" type="email" id="email" name="email" placeholder="Enter Email.." class="form-control">
      </div>
      <div class="form-group"><label for="password" class=" form-control-label">Password</label><input value="{{ Auth::user()->password }}" type="password" id="password" name="password" placeholder="Enter Password.." class="form-control">
      </div>
      <div class="form-group"><label for="registration" class=" form-control-label">Registration Date</label><input value="{{ Auth::user()->created_at }}" type="registration" id="registration" name="registration" placeholder="Enter Date.." class="form-control">
      </div>
     
    </form>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-dot-circle-o"></i> Submit
    </button>
    <button type="reset" class="btn btn-danger btn-sm">
      <i class="fa fa-ban"></i> Reset
    </button>
    </div>
  </div>
  <div>
@endsection