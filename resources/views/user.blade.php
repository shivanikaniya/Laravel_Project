@extends('admin.master');
@section('content')
    <h1 style="text-align:center;">User Login</h1>
    <div class="container">
    <form action="{{url('save')}}" method='POST'style="margin-left:200px">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Enter First Name</label>
            <input type="text" name="firstname"  class="form-control">
            <span class="text-danger">@error('firstname'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Last Name</label>
            <input type="text" name="lastname"  class="form-control">
            <span class="text-danger">@error('lastname'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Email</label>
            <input type="text" name="email"  class="form-control">
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Password</label>
            <input type="password" name="password"  class="form-control">
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Re-Confirm Password</label>
            <input type="password" name="confpassword" class="form-control">
            <span class="text-danger">@error('confpassword'){{$message}}@enderror</span>
        </div>
        <div class="mb-3 form-check from-check-inline">
            <input type="radio" name="status" id="active" class="form-check-input" value="Active">
            <label class="form-check-label">Active</label>
            <span class="text-danger">@error('status'){{$message}}@enderror</span>
        </div>
        <div class="mb-3 form-check from-check-inline"> 
            <input type="radio" name="status" id="inactive" class="form-check-input" value="Inactive">
            <label class="form-check-label">Inactive</label>
            <span class="text-danger">@error('status'){{$message}}@enderror</span>
        </div>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name='role'>
            @foreach($roles as $role)
            <option value="{{$role['role_name']}}">{{$role['role_name']}}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit" class="btn btn-success">Add User</button>
    </form>
    </div>
@endsection
