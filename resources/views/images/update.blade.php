@extends('admin.master');
@section('content')

<div class="container">

    <form action="/image_updateStore" method="POST" style="margin-left:250px">
        <h1>Update Image</h1>
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="mb-3">
            <label class="form-label">Enter Image</label>
            <input type="file" name="image" class="form-control" />
            <span class="text-danger">@error('image'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Altenative</label>
            <input type="text" name="alt" class="form-control">
            <span class="text-danger">@error('alt'){{$message}}@enderror</span>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Image</button>
    </form>
</div>
@endsection