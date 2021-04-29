@extends('home')

@section('judul')
  <div>
    My Profile
  </div>
@endsection
  
@section('main')
  <div class="card">
      @if(Session::has('pesan'))
        <div class="alert alert-success">
          {{Session::get('pesan')}}
        </div>
      @endif
  <div class="card-header">
    <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.png') }}" style="width: 200px;">
  </div>
  <div class="card-body card-block">
    <form action="{{ url("/user") }}" method="post">
      @csrf  
      <div class="form-group"><label for="name" class=" form-control-label">Full Name</label><input value="{{ Auth::user()->name }}" name="name" id="name" placeholder="Enter Name.." class="form-control">
      </div>
      <div class="form-group"><label for="email" class=" form-control-label">Email</label><input value="{{ Auth::user()->email }}" name="email" id="email" placeholder="Enter Email.." class="form-control">
      </div>
      <div class="form-group"><label for="password" class=" form-control-label">Password</label><input value="{{ Auth::user()->password }}" name="password" id="password" placeholder="Enter Password.." class="form-control">
      </div>
      <div class="form-group"><label for="registration" class=" form-control-label">Registration Date</label><input value="{{ Auth::user()->created_at }}" type="registration" id="registration" name="   " placeholder="Enter Date.." class="form-control">
      </div>
     
    </form>
  </div>
  <div class="card-footer">
    <a href="{{route('user.edit', Auth::user()->id)}}" type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-dot-circle-o"></i> Edit Profil
    </a>
    </div>
  </div>
  <div>
@endsection