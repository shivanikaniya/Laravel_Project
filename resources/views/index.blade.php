@extends('admin.master');
@section('content')

<div class="container py-3" style="margin: 10px 10px 20px 400px;">
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h3>Create Category</h3>
      </div>

      <div class="card-body">
        <form action="/cat_Store" method="POST">
          @csrf

          <div class="form-group">
            <select class="form-control" name="parent_id">
              <option value="">Select Parent Category</option>

              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Category Name" required>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection