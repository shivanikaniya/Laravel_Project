@extends('admin.master');
@section('content')

    <div class="container">

    <form action="{{url('small_update')}}" method="POST" style="margin-left:250px">
    <h1>Update Banner</h1>
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="mb-3">
            <label  class="form-label">Enter First Name</label>
            <input type="text" name="banner_name"  class="form-control">
            <span class="text-danger">@error('banner_name'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Last Name</label>
            <input type="file" name="banner_image"  class="form-control"/>
            <span class="text-danger">@error('banner_image'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter url</label>
            <input type="url" name="url"  class="form-control">
            <span class="text-danger">@error('url'){{$message}}@enderror</span>
        </div>
     
        <button type="submit" class="btn btn-primary">Update Banner</button>
    </form>
</div>
 @endsection