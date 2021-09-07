@extends('admin.master');
@section('content')
    <h1 style="text-align:center;">Create Banner</h1>
    <div class="container">
    <form action="/Store" method='POST'style="margin-left:200px">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Enter  Image</label>
            <input type="file" name="image"  class="form-control"/>
            <span class="text-danger">@error('image'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label  class="form-label">Enter Altenative</label>
            <input type="text" name="alt"  class="form-control">
            <span class="text-danger">@error('alt'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
                    <select class="form-control" name="product_id">
                        <option value="">Select product</option>
                        @foreach ($products as $product)
                        <option value="{{$product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
        <button type="submit" class="btn btn-success">Add Product_Image</button>
    </form>
    </div>
@endsection