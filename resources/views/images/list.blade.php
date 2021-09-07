
@extends('admin.master');
@section('content')
<h1 style="text-align:center;">Show banners</h1>
<div class="container" style="margin-left:300px">
    <button class="btn btn-success mb-3" onclick="window.location='{{ url("/productimage")}}'">Add Image</button>
    <table class="table table-striped">
        <tr>
           <th>ID</th>
           <th>Image</th>
            <th>alt</th>
            <th>Product_Id</th>
            <th>Action</th>
        </tr>
        <tr>
        @foreach($images as $images)
            <tr>
                <td>{{$images['id']}}</td>
            <td><img src='http://localhost/MyImages/{{$images->image}}' style='width:100px;height:100px' />
            <td>{{$images['alt']}}</td>
            <td>{{$images['product_id']}}</td>

           
            <td><button class="btn btn-danger"><a onclick="return myFunction();" href={{"image_delete/".$images['id']}} style=" text-decoration:none;color:white;">Delete</a></button>
                <button class="btn btn-warning"> <a href={{"image_edit/".$images['id']}} style=" text-decoration:none;color:white;">Edit</a></button>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection