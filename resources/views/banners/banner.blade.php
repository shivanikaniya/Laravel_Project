@extends('admin.master');
@section('content')
    <h1 style="text-align:center;">Create Banner</h1>
    <div class="container">
    <form action="{{url('banner.Save')}}" method='POST'style="margin-left:200px">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Enter Banner Name</label>
            <input type="text" name="banner_name"  class="form-control">
            <span class="text-danger">@error('banner_name'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Banner Image</label>
            <input type="file" name="banner_image"  class="form-control"/>
            <span class="text-danger">@error('banner_image'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter url</label>
            <input type="url" name="url"  class="form-control">
            <span class="text-danger">@error('url'){{$message}}@enderror</span>
        </div>
       
        <button type="submit" class="btn btn-success">Add Banner</button>
    </form>
    </div>
@endsection