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
    <form action="{{ route('user.update', $user->id)}}" method="post">
      @csrf  
      <div class="form-group"><label for="name" class=" form-control-label">Full Name</label><input value="{{$user->name }}" name="name" id="name" placeholder="Enter Name.." class="form-control">
      </div>
      <div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="text" name="email" value="{{$user->email }}" id="email" placeholder="Enter Email.." class="form-control">
      </div>
      <div class="form-group"><label for="password" class="form-control-label">Password</label><input type="password" name="password" id="password" placeholder="Enter Password.." class="form-control">
      </div>
      <div class="form-group"><label for="registration" class=" form-control-label">Registration Date</label><input value="{{$user->created_at }}" type="registration" id="registration" name="   " placeholder="Enter Date.." class="form-control">
      </div>
     
    
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-dot-circle-o"></i> Update
    </button>
    <a href="/user" type="reset" class="btn btn-danger btn-sm">
      <i class="fa fa-ban"></i> Batal
    </a>
  </div>
  </div>
  <div>
</form>
@endsection