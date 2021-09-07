@extends('admin.master');
@section('content')
        <h1 style="text-align:center;">Show products</h1>
        <div class="container"style="margin-left:250px">
        <button class="btn btn-success mb-3" onclick="window.location='{{ url("/product") }}'">Add Product</button>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category_id</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product['id']}}</td>
                <td>{{$product['name']}}</td>
                <td>{{$product['description']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['category_id']}}
                </td>
                <td>{{$product['stock']}}</td>  
                <td><button class="btn btn-danger"><a onclick="return myFunction();" href={{"product_delete/".$product['id']}} style=" text-decoration:none;
                color:white;">Delete</a></button>
                  <button class="btn btn-warning"> <a href={{"product_edit/".$product['id']}} style=" text-decoration:none;
                color:white;">Edit</a></button></td>
            </tr>
            @endforeach
        </table> 
        </div> 
@endsection
