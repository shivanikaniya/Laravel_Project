@extends('admin.master');
@section('content')

<div class="container">

    <form action="{{url('product_update')}}" method="POST" style="margin-left:250px">
        <h1>Update Product</h1>
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="mb-3">
            <label class="form-label">Enter Product Name</label>
            <input type="text" name="name" class="form-control" value="{{$data['name']}}">
            <span class="text-danger">@error('name'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter description</label>
            <input type="text" name="description" class="form-control" value="{{$data['description']}}">
            <span class="text-danger">@error('description'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter Email</label>
            <input type="text" name="price" class="form-control" value="{{$data['price']}}">
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>

        <div class="mb-3 form-check from-check-inline">
            <input type="radio" name="stock" id="Available" class="form-check-input" value="Available">
            <label class="form-check-label">Available</label>
            <span class="text-danger">@error('stock'){{$message}}@enderror</span>
        </div>
        <div class="mb-3 form-check from-check-inline">
            <input type="radio" name="stock" id="Unavailable" class="form-check-input" value="Unavailable">
            <label class="form-check-label">Unavailable</label>
            <span class="text-danger">@error('stock'){{$message}}@enderror</span>
        </div>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name='category_id' value="{{$data['category_id']}}">
            <option value="">Select Category</option>

            @foreach ($categories as $category)
            <option value="{{ $category->parent_id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection