@extends('admin.master');
@section('content')
<div class="container">
      <form action="/cat_update" method="POST"style="margin-left:250px">
          @csrf
          <input type="hidden" name="id" value="{{$data['id']}}">
          <div class="mb-3">
            <label  class="form-label">Enter Name</label>
            <input type="text" name="name" class="form-control" value="{{$data['name']}}" placeholder="Category Name" required>
          </div>
          <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
  </div>
</div>
@endsection
