@extends('admin.master');
@section('content')
<div class="container"style="margin-left:250px">
<button class="btn btn-success mb-3 mt-5" onclick="window.location='{{ url("/category") }}'">Add Product</button>
<div class="row" >
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h3>Categories</h3>
      </div>
      <div class="card-body">
        <ul class="list-group">
          @foreach ($categories as $category)
          <li class="list-group-item">
            <div class="d-flex justify-content-between">
              {{ $category->name }}

              <div class="button-group d-flex">
              <button class="btn btn-danger"><a onclick="return myFunction();" href={{"destroy/".$category['id']}} style=" text-decoration:none;
                color:white;">Delete</a></button>
                 <button class="btn btn-warning"> <a href={{"cat_edit/".$category['id']}} style=" text-decoration:none;
                color:white;">Edit</a></button>
              </div>
            </div>

            @if ($category->children)
            <ul class="list-group mt-2">
              @foreach ($category->children as $child)
              <li class="list-group-item">
                <div class="d-flex justify-content-between">
                  {{ $child->name }}
                </div>
              </li>
              @endforeach
            </ul>
            @endif
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
 </div>
</div>
</
@endsection